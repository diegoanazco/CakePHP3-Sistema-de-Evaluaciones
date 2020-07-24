<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subjects Model
 *
 * @property \App\Model\Table\SemestersTable&\Cake\ORM\Association\BelongsTo $Semesters
 * @property \App\Model\Table\TypesSubjectsTable&\Cake\ORM\Association\BelongsTo $TypesSubjects
 *
 * @method \App\Model\Entity\Subject get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subject|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subject saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subject findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubjectsTable extends Table
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

        $this->setTable('subjects');
        $this->setDisplayField('subjects_name');
        $this->setPrimaryKey('subjects_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Semesters', [
            'foreignKey' => 'semesters_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('TypesSubjects', [
            'foreignKey' => 'types_subjects_id',
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
            ->integer('subjects_id')
            ->allowEmptyString('subjects_id', null, 'create');

        $validator
            ->scalar('subjects_name')
            ->maxLength('subjects_name', 50)
            ->requirePresence('subjects_name', 'create')
            ->notEmptyString('subjects_name');

        $validator
            ->integer('subjects_credit')
            ->requirePresence('subjects_credit', 'create')
            ->notEmptyString('subjects_credit');

        $validator
            ->integer('subjects_hours')
            ->requirePresence('subjects_hours', 'create')
            ->notEmptyString('subjects_hours');

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
        $rules->add($rules->existsIn(['semesters_id'], 'Semesters'));
        $rules->add($rules->existsIn(['types_subjects_id'], 'TypesSubjects'));

        return $rules;
    }
}
