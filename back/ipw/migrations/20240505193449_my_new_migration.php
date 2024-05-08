<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MyNewMigration extends AbstractMigration
{
    public function change()
    {
        // create the table
        $table_users = $this->table('users');
        $table_users
            ->addColumn('username', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 1000])
            ->addColumn('email', 'string', ['limit' => 255])
            ->addIndex(['email'], ['unique' => true]) // Ensure email uniqueness
            ->create();

        $compress_logs = $this->table('$compress_logs');
        $compress_logs
            ->addColumn('user_id', 'integer', ['signed' => false])
            ->addColumn('compress_time', 'datetime')
            ->create();

        if ($this->isMigratingUp()) {
            $table_users->insert([['username' => 'admin', 'password' => '@!LK#JpdWQ(#*@!#ojdwqpE()w8eqj1p2oi3)!@(#*79dus9q03@!)(#yhed8i1h230(@!*3','email' => 'admin@gmail.com']])
                ->save();
        }
    }

}
