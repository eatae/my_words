<?php

namespace App\Classes\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;


class LangType extends Type
{
    const TYPE = 'lang';
    const VALUES = ['ru', 'en'];

    /**
     * @param array $fieldDeclaration
     * @param AbstractPlatform $platform
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        // dump($fieldDeclaration);

        return sprintf('VARCHAR(255) CHECK(%s IN (%s))', $fieldDeclaration['name'], self::valuesToString());
    }

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return mixed
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        // This is executed when the value is read from the database. Make your conversions here, optionally using the $platform.
        try {
            if (!in_array($value, self::VALUES)) {
                throw new \Exception(\sprintf('Invalid value "%s" for ENUM "%s".', $value, $this->getName()));
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return $value;
    }


    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return mixed
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        // This is executed when the value is written to the database. Make your conversions here, optionally using the $platform.
        try {
            if (empty($value) || !in_array($value, self::VALUES)) {
                throw new \Exception(\sprintf('Invalid value "%s" for ENUM "%s".', $value, $this->getName()));
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return $value;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return self::TYPE;
    }


    /**
     * @return string
     */
    public static function valuesToString(): string
    {
        $values = implode(
            ', ',
            array_map(
                static function (string $value) {
                    return "'{$value}'";
                },
                self::VALUES
            )
        );
        return $values;
    }
}
