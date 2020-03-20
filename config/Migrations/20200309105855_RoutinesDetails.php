<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RoutinesDetails extends AbstractMigration
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
        $table = $this->table('routine_details');
        $table->addColumn('routine_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('excercise_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('sets', 'integer', [
            'default' => null,
            'limit'=> 2,
            'null' => true,
        ]);
        $table->addColumn('repsperset', 'integer', [
            'default' => null,
            'limit'=> 2,
            'null' => true,
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
