<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Reports extends AbstractMigration
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
         $table = $this->table('reports');
        $table->addColumn('member_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('reporttype', 'enum', [
            'default' => null,
            'values'=> ['0','1','2'],
            'comment'=>('0->query
                        1->suggestion
                        2->complaint'),
            'null' => false,
        ]);
        $table->addColumn('massage', 'text', [
            'default' => null,
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
