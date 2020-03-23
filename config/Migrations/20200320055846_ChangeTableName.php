<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class ChangeTableName extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->table('member_details')
            ->rename('memberdetails')
            ->update();
        $this->table('trainer_details')
            ->rename('trainerdetails')
            ->update();
        $this->table('gym_equipments')
            ->rename('gymequipments')
            ->update();
        $this->table('routine_details')
            ->rename('routinedetails')
            ->update();
    }
    public function down()
    {
        $this->table('memberdetails')
            ->rename('member_details')
            ->update();
        $this->table('trainerdetails')
            ->rename('trainer_details')
            ->update();
        $this->table('gymequipments')
            ->rename('gym_equipments')
            ->update();
        $this->table('routinedetails')
            ->rename('routine_details')
            ->update();
    }
}
