<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180115143949 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE language ADD keywords VARCHAR(255) NOT NULL, DROP subdomain, DROP title, DROP keyword, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE country DROP FOREIGN KEY FK_5373C966F92F3E70');
        $this->addSql('DROP INDEX IDX_5373C966F92F3E70 ON country');
        $this->addSql('ALTER TABLE country ADD country VARCHAR(255) NOT NULL, DROP country_id, DROP name');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE country ADD country_id INT DEFAULT NULL, ADD name VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, DROP country');
        $this->addSql('ALTER TABLE country ADD CONSTRAINT FK_5373C966F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_5373C966F92F3E70 ON country (country_id)');
        $this->addSql('ALTER TABLE language ADD subdomain VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, ADD title VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, ADD keyword VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, DROP keywords, CHANGE description description VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci');
    }
}
