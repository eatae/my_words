<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;


class UserFixtures extends Fixture
{
    private $passwordEncoder;
    protected $mails = [
        'foobar1@mail.ru', 'foobar2@mail.ru', 'foobar3@mail.ru',
        'foobar4@mail.ru', 'foobar5@mail.ru', 'foobar6@mail.ru',
        'foobar7@mail.ru', 'foobar8@mail.ru', 'foobar9@mail.ru',
        'foobar10@mail.ru'
    ];
    protected $names = [
        'Test1', 'Test2', 'Test3', 'Test4', 'Test5',
        'Test6', 'Test7', 'Test8', 'Test9', 'Test10'
    ];


    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < count($this->mails); $i++) {
            $user = new User();
            $user->setEmail( $this->mails[$i] );
            $user->setUsername( $this->names[$i] );
            $user->setNativeLang('ru');
            $user->setRoles([]);
            $user->setPassword( $this->passwordEncoder->encodePassword($user, '2222') );
            $manager->persist($user);

            $manager->flush();
        }

    }
}
