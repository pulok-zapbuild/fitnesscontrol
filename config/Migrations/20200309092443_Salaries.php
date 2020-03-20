<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Salaries extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('salaries');
        $table->addColumn('trainer_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('topay', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('joiningdate', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('leavingdate', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('paid', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('remaining', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('comments', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
