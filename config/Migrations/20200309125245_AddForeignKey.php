<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddForeignKey extends AbstractMigration
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
        $this->table('member_details')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                    'trainer_id',
                    'trainer_details',
                    'id',
                    [
                        'update' => 'RESTRICT',
                        'delete' => 'CASCADE', 
                    ]
            )
            ->update();
        $this->table('trainer_details')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();
       
        $this->table('salaries')
            ->addForeignKey(
                'trainer_id',
                'trainer_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();
        $this->table('payments')
            ->addForeignKey(
                'member_id',
                'member_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();
        $this->table('reports')
            ->addForeignKey(
                'member_id',
                'member_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();
        $this->table('responses')
            ->addForeignKey(
                'report_id',
                'reports',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                    'responser_id',
                    'trainer_details',
                    'id',
                    [
                        'update'=>'RESTRICT',
                        'delete'=>'CASCADE',
                    ]
            )
            ->update();
        $this->table('routines')
            ->addForeignKey(
                'member_id',
                'member_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'trainer_id',
                'trainer_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();
        $this->table('routine_details')
            ->addForeignKey(
                'routine_id',
                'routines',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'excercise_id',
                'excercises',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();
        $this->table('diets')
            ->addForeignKey(
                'trainer_id',
                'trainer_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'member_id',
                'member_details',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();

    }
}
