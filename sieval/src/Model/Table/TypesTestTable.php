<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypesTest Model
 *
 * @method \App\Model\Entity\TypesTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypesTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypesTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypesTest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesTest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypesTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypesTest findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TypesTestTable extends Table
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

        $this->setTable('types_test');
        $this->setDisplayField('types_test_description');
        $this->setPrimaryKey('types_test_id');

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
            ->integer('types_test_id')
            ->allowEmptyString('types_test_id', null, 'create');

        $validator
            ->scalar('types_test_description')
            ->maxLength('types_test_description', 45)
            ->requirePresence('types_test_description', 'create')
            ->notEmptyString('types_test_description');

        $validator
            ->integer('types_test_weight')
            ->requirePresence('types_test_weight', 'create')
            ->notEmptyString('types_test_weight');

        return $validator;
    }
}
