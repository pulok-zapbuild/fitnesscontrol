<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Responses extends AbstractMigration
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
        $table = $this->table('responses');
        $table->addColumn('report_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('responser_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('response', 'text', [
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
