<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MyNewMigration extends AbstractMigration
{
    public function change()
    {
        // create the table
        $table_users = $this->table('users');
        $table_users->addColumn('id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('username', 'string', ['limit' => 100])
            ->addColumn('email', 'string', ['limit' => 255])
            ->addIndex(['email'], ['unique' => true]) // Ensure email uniqueness
            ->create();

        if ($this->isMigratingUp()) {
            $table_users->insert([['username' => 'admin', 'email' => 'admin@gmail.com']])
                ->save();
        }
    }

}
