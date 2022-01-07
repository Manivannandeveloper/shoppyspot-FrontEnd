<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220107080244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_category ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tb_category ADD CONSTRAINT FK_3EEB0CDF67B3B43D FOREIGN KEY (users_id) REFERENCES tb_users (id)');
        $this->addSql('CREATE INDEX IDX_3EEB0CDF67B3B43D ON tb_category (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tb_category DROP FOREIGN KEY FK_3EEB0CDF67B3B43D');
        $this->addSql('DROP INDEX IDX_3EEB0CDF67B3B43D ON tb_category');
        $this->addSql('ALTER TABLE tb_category DROP users_id');
    }
}
