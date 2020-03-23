<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class MemberDetailsTable extends Table
{
	public function initialize(array $config) : void
	{	
		parent::initialize($config);
		$this->setTable('trainerdetails');
		$this->setDisplayField('user_id');
		$this->setPrimaryKey('id');
		$this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'modified_at' => 'always']]]);
        $this->hasOne('users');
    }

	public function validationDefault(Validator $validator): Validator
    {
        
    }
}