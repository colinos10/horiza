<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210401102204 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD nom_proprietaire VARCHAR(255) NOT NULL, ADD prenom_proprietaire VARCHAR(255) NOT NULL, ADD tel_proprietaire VARCHAR(255) NOT NULL, ADD type_vehicule VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD disponibilite VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP nom_proprietaire, DROP prenom_proprietaire, DROP tel_proprietaire, DROP type_vehicule, DROP ville, DROP disponibilite');
    }
}
