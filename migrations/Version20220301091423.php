<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301091423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tb_colors (id INT AUTO_INCREMENT NOT NULL, color_name VARCHAR(255) NOT NULL, color_code VARCHAR(255) DEFAULT NULL, color_desc VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tb_products ADD product_color_id INT DEFAULT NULL, ADD product_discount VARCHAR(100) DEFAULT NULL, ADD product_instoct INT DEFAULT NULL, ADD product_quantity INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tb_products ADD CONSTRAINT FK_8B1D4F44B16A7522 FOREIGN KEY (product_color_id) REFERENCES tb_colors (id)');
        $this->addSql('CREATE INDEX IDX_8B1D4F44B16A7522 ON tb_products (product_color_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_products DROP FOREIGN KEY FK_8B1D4F44B16A7522');
        $this->addSql('DROP TABLE tb_colors');
        $this->addSql('DROP INDEX IDX_8B1D4F44B16A7522 ON tb_products');
        $this->addSql('ALTER TABLE tb_products DROP product_color_id, DROP product_discount, DROP product_instoct, DROP product_quantity');
    }
}
