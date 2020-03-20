<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class GymEquipments extends AbstractMigration
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
        $table = $this->table('gym_equipments');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 25,
            'null' => false,
        ]);
        $table->addColumn('category', 'enum', [
            'default' => null,
            'values'=> ['0','1','2','3','4','5','6','7'],
            'comment'=> ('0->weight training
                        1->crossfit training
                        2->cardio machine
                        3->abs workout
                        4->yoga equipments
                        5->support accesories
                        6->massage tools
                        7->gym balls'),
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('image', 'string', [
            'default' => null,
            'limit' => 40,
            'null' => false,
        ]);
        $table->addColumn('howtousevideo', 'string', [
            'default' => null,
            'limit' => 40,
            'null' => false,
        ]);
        $table->addColumn('purchasedate', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('price', 'float', [
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
