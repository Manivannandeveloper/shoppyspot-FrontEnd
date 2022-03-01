<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301090537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tb_size (id INT AUTO_INCREMENT NOT NULL, size_name VARCHAR(255) NOT NULL, size_description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tb_products ADD product_size_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tb_products ADD CONSTRAINT FK_8B1D4F449854B397 FOREIGN KEY (product_size_id) REFERENCES tb_size (id)');
        $this->addSql('CREATE INDEX IDX_8B1D4F449854B397 ON tb_products (product_size_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_products DROP FOREIGN KEY FK_8B1D4F449854B397');
        $this->addSql('DROP TABLE tb_size');
        $this->addSql('DROP INDEX IDX_8B1D4F449854B397 ON tb_products');
        $this->addSql('ALTER TABLE tb_products DROP product_size_id');
    }
}
