<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tests Model
 *
 * @property \App\Model\Table\AssignmentsTable&\Cake\ORM\Association\BelongsTo $Assignments
 * @property \App\Model\Table\TypesTestTable&\Cake\ORM\Association\BelongsTo $TypesTest
 * @property \App\Model\Table\SemestersTable&\Cake\ORM\Association\BelongsTo $Semesters
 * @property \App\Model\Table\SchoolsTable&\Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\Test get($primaryKey, $options = [])
 * @method \App\Model\Entity\Test newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Test[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Test|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Test saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Test patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Test[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Test findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TestsTable extends Table
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

        $this->setTable('tests');
        $this->setDisplayField('tests_id');
        $this->setPrimaryKey('tests_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Assignments', [
            'foreignKey' => 'assignment_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('TypesTest', [
            'foreignKey' => 'types_test_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Semesters', [
            'foreignKey' => 'semesters_id',
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
            ->integer('tests_id')
            ->allowEmptyString('tests_id', null, 'create');

        $validator
            ->date('test_date')
            ->requirePresence('test_date', 'create')
            ->notEmptyDate('test_date');

        $validator
            ->time('tests_start')
            ->requirePresence('tests_start', 'create')
            ->notEmptyTime('tests_start');

        $validator
            ->time('tests_end')
            ->requirePresence('tests_end', 'create')
            ->notEmptyTime('tests_end');

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
        $rules->add($rules->existsIn(['assignment_id'], 'Assignments'));
        $rules->add($rules->existsIn(['types_test_id'], 'TypesTest'));
        $rules->add($rules->existsIn(['semesters_id'], 'Semesters'));
        $rules->add($rules->existsIn(['schools_id'], 'Schools'));

        return $rules;
    }
}
