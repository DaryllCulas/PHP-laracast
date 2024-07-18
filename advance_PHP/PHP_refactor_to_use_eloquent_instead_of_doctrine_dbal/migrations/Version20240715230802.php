<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240715230802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $users = $schema->createTable('users');

        $users->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $users->addColumn('user_name', Types::STRING, ['length' => 255]);
        $users->addColumn('created_at', Types::DATETIME_MUTABLE);

        $users->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $schema->dropTable('users');
    }
}
