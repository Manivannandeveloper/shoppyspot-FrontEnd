<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220107064817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_products ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tb_products ADD CONSTRAINT FK_8B1D4F4467B3B43D FOREIGN KEY (users_id) REFERENCES tb_users (id)');
        $this->addSql('CREATE INDEX IDX_8B1D4F4467B3B43D ON tb_products (users_id)');
        $this->addSql('ALTER TABLE tb_users ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_products DROP FOREIGN KEY FK_8B1D4F4467B3B43D');
        $this->addSql('DROP INDEX IDX_8B1D4F4467B3B43D ON tb_products');
        $this->addSql('ALTER TABLE tb_products DROP users_id');
        $this->addSql('ALTER TABLE tb_users DROP first_name, DROP last_name');
    }
}
