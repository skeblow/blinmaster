<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250406135816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP SEQUENCE recipe_entity_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE recipe_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE recipe (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE recipe_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE recipe_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE recipe
        SQL);
    }
}
