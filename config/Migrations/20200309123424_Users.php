<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit'=> 30,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('status','enum',[
            'default' => null,
            'values' => ['0','1'],
            'comment' => ('0->Unactive,1->Active'),
            'null' => false,
        ]);
        $table->addColumn('role', 'enum', [
            'default' => null,
            'values'=>['0','1','2'],
            'comment'=>('0->owner,
                        1->trainer,
                        2->member'),
            'null' => false,
        ]);
        $table->addColumn('firstname', 'string', [
            'default' => null,
            'limit'=> 30,
            'null' => true,
        ]);
        $table->addColumn('lastname', 'string', [
            'default' => null,
            'limit'=> 30,
            'null' => true,
        ]);
        $table->addColumn('image', 'string', [
            'default' => null,
            'limit'=>40,
            'null' => true,
        ]);
        $table->addColumn('gender', 'enum', [
            'default' => null,
            'values'=>['0','1','2'],
            'comment'=>'0 -> male
                        1 -> female
                        2 -> others',
            'null' => true,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit'=> 50,
            'null' => true,
        ]);
        $table->addColumn('mobileno', 'string', [
            'default' => null,
            'limit'=> 15,
            'null' => true,
        ]);
        $table->addColumn('addressline1', 'string', [
            'default' => null,
            'limit'=>30,
            'null' => true,
        ]);
        $table->addColumn('addressline2', 'string', [
            'default' => null,
            'limit'=>30,
            'null' => true,
        ]);
        $table->addColumn('city', 'string', [
            'default' => null,
            'limit'=>20,
            'null' => true,
        ]);
        $table->addColumn('state', 'string', [
            'default' => null,
            'limit'=>20,
            'null' => true,
        ]);
        $table->addColumn('pincode', 'integer', [
            'default' => null,
            'limit'=>10,
            'null' => true,
        ]);
        $table->addColumn('country', 'string', [
            'default' => null,
            'limit'=>20,
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
