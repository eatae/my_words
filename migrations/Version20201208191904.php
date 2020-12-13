<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201208191904 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE SEQUENCE foo_orm_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        // $this->addSql('CREATE TABLE foo_orm (id INT NOT NULL, bar VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        /*
        $myTable = $schema->createTable("foo_orm");
        $myTable->addColumn("id", "integer", array("unsigned" => true))->setAutoincrement(true);
        $myTable->addColumn("bar", "string", array("length" => 32));
        $myTable->setPrimaryKey(array("id"));
        $myTable->addUniqueIndex(array("bar"));
        $myTable->setComment('Some comment');
        */
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE foo_orm_id_seq CASCADE');
        $this->addSql('DROP TABLE foo_orm');
        /*
        $table = $schema->getTable('foo_orm');
        $sequence = $table->getPrimaryKeyColumns();

        dd($sequence);
        */

        //$schema->dropTable('foo_orm')->
    }
}
