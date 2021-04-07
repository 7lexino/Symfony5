<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407052651 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE noticia_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE usuario_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE noticia (id INT NOT NULL, propietario_id INT NOT NULL, titulo VARCHAR(255) NOT NULL, extracto VARCHAR(255) NOT NULL, contenido VARCHAR(2048) NOT NULL, fecha_publicacion TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, img_destacada VARCHAR(255) DEFAULT NULL, palabras_clave VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_31205F9653C8D32C ON noticia (propietario_id)');
        $this->addSql('CREATE TABLE usuario (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2265B05DF85E0677 ON usuario (username)');
        $this->addSql('ALTER TABLE noticia ADD CONSTRAINT FK_31205F9653C8D32C FOREIGN KEY (propietario_id) REFERENCES usuario (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE noticia DROP CONSTRAINT FK_31205F9653C8D32C');
        $this->addSql('DROP SEQUENCE noticia_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE usuario_id_seq CASCADE');
        $this->addSql('DROP TABLE noticia');
        $this->addSql('DROP TABLE usuario');
    }
}
