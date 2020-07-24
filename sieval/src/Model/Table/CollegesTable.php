<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colleges Model
 *
 * @method \App\Model\Entity\College get($primaryKey, $options = [])
 * @method \App\Model\Entity\College newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\College[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\College|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\College saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\College patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\College[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\College findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CollegesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('colleges');
        $this->setDisplayField('college_name');
        $this->setPrimaryKey('college_id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('college_id')
            ->allowEmptyString('college_id', null, 'create');

        $validator
            ->scalar('college_name')
            ->maxLength('college_name', 150)
            ->requirePresence('college_name', 'create')
            ->notEmptyString('college_name');

        $validator
            ->scalar('college_address')
            ->maxLength('college_address', 150)
            ->requirePresence('college_address', 'create')
            ->notEmptyString('college_address');

        $validator
            ->scalar('college_phone')
            ->maxLength('college_phone', 10)
            ->requirePresence('college_phone', 'create')
            ->notEmptyString('college_phone');

        $validator
            ->scalar('college_cellphone')
            ->maxLength('college_cellphone', 9)
            ->requirePresence('college_cellphone', 'create')
            ->notEmptyString('college_cellphone');

        $validator
            ->scalar('college_email')
            ->maxLength('college_email', 150)
            ->requirePresence('college_email', 'create')
            ->notEmptyString('college_email');

        return $validator;
    }
}
