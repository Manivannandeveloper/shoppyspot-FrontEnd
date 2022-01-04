<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220103105835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_products ADD CONSTRAINT FK_8B1D4F4412469DE2 FOREIGN KEY (category_id) REFERENCES tb_category (id)');
        $this->addSql('CREATE INDEX IDX_8B1D4F4412469DE2 ON tb_products (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_products DROP FOREIGN KEY FK_8B1D4F4412469DE2');
        $this->addSql('DROP INDEX IDX_8B1D4F4412469DE2 ON tb_products');
    }
}
