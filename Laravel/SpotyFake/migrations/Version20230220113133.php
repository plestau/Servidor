<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220113133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cancion (id INT AUTO_INCREMENT NOT NULL, disco_id INT NOT NULL, cantante_id INT NOT NULL, titulo VARCHAR(255) NOT NULL, duracion TIME DEFAULT NULL, genero VARCHAR(255) DEFAULT NULL, INDEX IDX_E4620FA0872CCC0 (disco_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cantante (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, fecha_nacimiento DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE disco (id INT AUTO_INCREMENT NOT NULL, cantante_id INT NOT NULL, titulo VARCHAR(255) NOT NULL, fecha_lanzamiento DATE DEFAULT NULL, INDEX IDX_29D40CBD625454B1 (cantante_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cancion ADD CONSTRAINT FK_1DCB99549B1D840F FOREIGN KEY (disco_id) REFERENCES disco (id)');
        $this->addSql('ALTER TABLE cancion ADD CONSTRAINT FK_1DCB9954A6BA9FA0 FOREIGN KEY (cantante_id) REFERENCES cantante (id)');   
        $this->addSql('ALTER TABLE disco ADD CONSTRAINT FK_29D40CBD625454B1 FOREIGN KEY (cantante_id) REFERENCES cantante (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cancion DROP FOREIGN KEY FK_1DCB9954A6BA9FA0');
        $this->addSql('ALTER TABLE cancion DROP FOREIGN KEY FK_1DCB99549B1D840F');
        $this->addSql('ALTER TABLE disco DROP FOREIGN KEY FK_29D40CBD625454B1');
        $this->addSql('DROP TABLE cancion');
        $this->addSql('DROP TABLE cantante');
        $this->addSql('DROP TABLE disco');
    }
}
