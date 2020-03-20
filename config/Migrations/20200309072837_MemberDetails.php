<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class MemberDetails extends AbstractMigration
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
        $table = $this->table('member_details');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('trainer_id', 'integer', [
            'default' => null,
            'limit'=> 11,
            'null' => false,
        ]);
        $table->addColumn('occupation', 'string', [
            'default' => null,
            'limit'=> 20,
            'null' => false,
        ]);
        $table->addColumn('companyname', 'string', [
            'default' => null,
            'limit'=> 30,
            'null' => false,
        ]);
        $table->addColumn('joiningdate', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('bodytype', 'enum', [
            'default' => null,
            'values'=>['0','1','2'],
            'comment'=>'0 -> ectomorph
                        1 -> endomorph
                        2 -> mesomorph',
            'null' => false,
        ]);
        $table->addColumn('level', 'enum', [
            'default' => null,
            'values'=> ['0','1','2'],
            'comment'=> '0 -> beginner
                        1 -> intermediate
                        2 -> expert',
            'null' => false,
        ]);
        $table->addColumn('membershiptype', 'enum', [
            'default' => null,
            'values'=> ['0','1','2','3','4','5','6'],
            'comment'=> '0->single
                        1->prepaid(3 months)
                        2->prepaid(6 months)
                        3->prepaid(12 months)
                        4->one month
                        5->family membership
                        6->drop-in(one day)',
            'limit'=> 50,
            'null' => false,
        ]);
        $table->addColumn('fees', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('timing', 'enum', [
            'default' => null,
            'values'=> ['0','1'],
            'comment'=> ('0->morning
                        1->evening'),
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
