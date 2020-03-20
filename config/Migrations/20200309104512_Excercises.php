<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Excercises extends AbstractMigration
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
        $table = $this->table('excercises');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit'=> 20,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('image', 'string', [
            'default' => null,
            'limit'=> 30,
            'null' => true,
        ]);
        $table->addColumn('video', 'string', [
            'default' => null,
            'limit'=> 30,
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
