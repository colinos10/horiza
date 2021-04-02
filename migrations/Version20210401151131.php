<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210401151131 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, tel VARCHAR(10) NOT NULL, img1 VARCHAR(255) NOT NULL, civilite VARCHAR(20) NOT NULL, adresse VARCHAR(50) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(50) NOT NULL, date_naissance DATE NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, marque VARCHAR(20) NOT NULL, modele VARCHAR(25) NOT NULL, immatriculation VARCHAR(9) NOT NULL, carburant VARCHAR(15) NOT NULL, nombre_place INT NOT NULL, ville VARCHAR(50) NOT NULL, couleur VARCHAR(20) NOT NULL, img1 VARCHAR(255) NOT NULL, img2 VARCHAR(255) DEFAULT NULL, prix INT NOT NULL, disponibilite TINYINT(1) NOT NULL, adresse VARCHAR(100) NOT NULL, code_postal INT NOT NULL, type_vehicule VARCHAR(15) NOT NULL, INDEX IDX_292FFF1DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DA76ED395');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vehicule');
    }
}
