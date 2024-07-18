<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240715234059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE Invoices_Statuses');
        $this->addSql('ALTER TABLE Invoice DROP due_date, CHANGE status status INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE Invoice_items DROP FOREIGN KEY Invoice_items_ibfk_1');
        $this->addSql('DROP INDEX invoice_id ON Invoice_items');
        $this->addSql('CREATE INDEX IDX_6FBAF20D2989F1FD ON Invoice_items (invoice_id)');
        $this->addSql('ALTER TABLE Invoice_items ADD CONSTRAINT Invoice_items_ibfk_1 FOREIGN KEY (invoice_id) REFERENCES Invoice (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Invoices_Statuses (id INT AUTO_INCREMENT NOT NULL, invoiceNumber VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, amount NUMERIC(10, 2) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE Invoice ADD due_date DATETIME NOT NULL, CHANGE status status TINYINT(1) NOT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE Invoice_items DROP FOREIGN KEY FK_6FBAF20D2989F1FD');
        $this->addSql('DROP INDEX idx_6fbaf20d2989f1fd ON Invoice_items');
        $this->addSql('CREATE INDEX invoice_id ON Invoice_items (invoice_id)');
        $this->addSql('ALTER TABLE Invoice_items ADD CONSTRAINT FK_6FBAF20D2989F1FD FOREIGN KEY (invoice_id) REFERENCES Invoice (id)');
    }
}
