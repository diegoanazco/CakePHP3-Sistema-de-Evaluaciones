<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StudyPlans Model
 *
 * @property \App\Model\Table\SchoolsTable&\Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\StudyPlan get($primaryKey, $options = [])
 * @method \App\Model\Entity\StudyPlan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StudyPlan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StudyPlan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StudyPlan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StudyPlan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StudyPlan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StudyPlan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudyPlansTable extends Table
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

        $this->setTable('study_plans');
        $this->setDisplayField('study_plans_year');
        $this->setPrimaryKey('study_plans_id');

        $this->addBehavior('Timestamp');

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
            ->integer('study_plans_id')
            ->allowEmptyString('study_plans_id', null, 'create');

        $validator
            ->scalar('study_plans_year')
            ->maxLength('study_plans_year', 10)
            ->requirePresence('study_plans_year', 'create')
            ->notEmptyString('study_plans_year');

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
        $rules->add($rules->existsIn(['schools_id'], 'Schools'));

        return $rules;
    }
}
