<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219175206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant ADD env_id INT NOT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B1118AD1504 FOREIGN KEY (env_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_D79F6B1118AD1504 ON participant (env_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B1118AD1504');
        $this->addSql('DROP INDEX IDX_D79F6B1118AD1504 ON participant');
        $this->addSql('ALTER TABLE participant DROP env_id');
    }
}
