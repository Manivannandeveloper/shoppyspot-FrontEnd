<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220103075151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tb_category (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, category_name VARCHAR(255) NOT NULL, keyword VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, category_image VARCHAR(1000) DEFAULT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_products (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, product_title VARCHAR(255) NOT NULL, keyword VARCHAR(255) NOT NULL, product_desc VARCHAR(1000) DEFAULT NULL, image VARCHAR(1000) DEFAULT NULL, product_price DOUBLE PRECISION DEFAULT NULL, product_details VARCHAR(1000) DEFAULT NULL, type VARCHAR(100) DEFAULT NULL, year INT DEFAULT NULL, product_status INT NOT NULL, user_id INT DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tb_category');
        $this->addSql('DROP TABLE tb_products');
    }
}
