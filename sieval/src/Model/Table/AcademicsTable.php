<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Academics Model
 *
 * @property \App\Model\Table\CoordinatorsTable&\Cake\ORM\Association\BelongsTo $Coordinators
 * @property \App\Model\Table\SchoolsTable&\Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\Academic get($primaryKey, $options = [])
 * @method \App\Model\Entity\Academic newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Academic[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Academic|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Academic saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Academic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Academic[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Academic findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AcademicsTable extends Table
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

        $this->setTable('academics');
        $this->setDisplayField('Array');
        $this->setPrimaryKey('academics_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Coordinators', [
            'foreignKey' => 'coordinators_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Schools', [
            'foreignKey' => 'schools_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('academics_id')
            ->allowEmptyString('academics_id', null, 'create');

        $validator
            ->integer('academics_year')
            ->requirePresence('academics_year', 'create')
            ->notEmptyString('academics_year');

        $validator
            ->scalar('academics_period')
            ->maxLength('academics_period', 2)
            ->requirePresence('academics_period', 'create')
            ->notEmptyString('academics_period');

        $validator
            ->date('academics_start')
            ->requirePresence('academics_start', 'create')
            ->notEmptyDate('academics_start');

        $validator
            ->date('academics_end')
            ->requirePresence('academics_end', 'create')
            ->notEmptyDate('academics_end');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['coordinators_id'], 'Coordinators'));
        $rules->add($rules->existsIn(['schools_id'], 'Schools'));

        return $rules;
    }
}
