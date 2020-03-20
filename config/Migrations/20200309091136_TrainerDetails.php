<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class TrainerDetails extends AbstractMigration
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
        $table = $this->table('trainer_details');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('degreefrom', 'string', [
            'default' => null,
            'limit'=> 30,
            'null' => false,
        ]);
        $table->addColumn('joiningdate', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('type', 'enum', [
            'default' => null,
            'values'=>['0','1'],
            'comment'=>'0 -> group
                        1 -> personal',
            'null' => false,
        ]);
        $table->addColumn('salary', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('costpermember', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('experience', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
        ]);
        $table->addColumn('introvideo', 'string', [
            'default' => null,
            'limit' => 20,
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
