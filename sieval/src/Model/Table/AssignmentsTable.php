<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assignments Model
 *
 * @property \App\Model\Table\AcademicsTable&\Cake\ORM\Association\BelongsTo $Academics
 * @property \App\Model\Table\SubjectsTable&\Cake\ORM\Association\BelongsTo $Subjects
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 * @property \App\Model\Table\ShiftsTable&\Cake\ORM\Association\BelongsTo $Shifts
 * @property \App\Model\Table\SectionsTable&\Cake\ORM\Association\BelongsTo $Sections
 *
 * @method \App\Model\Entity\Assignment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Assignment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Assignment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Assignment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assignment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assignment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Assignment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Assignment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssignmentsTable extends Table
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

        $this->setTable('assignments');
        $this->setDisplayField('assignment_id');
        $this->setPrimaryKey('assignment_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Academics', [
            'foreignKey' => 'academics_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Subjects', [
            'foreignKey' => 'subjects_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Teachers', [
            'foreignKey' => 'teachers_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Shifts', [
            'foreignKey' => 'shifts_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sections', [
            'foreignKey' => 'sections_id',
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
            ->integer('assignment_id')
            ->allowEmptyString('assignment_id', null, 'create');

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
        $rules->add($rules->existsIn(['academics_id'], 'Academics'));
        $rules->add($rules->existsIn(['subjects_id'], 'Subjects'));
        $rules->add($rules->existsIn(['teachers_id'], 'Teachers'));
        $rules->add($rules->existsIn(['shifts_id'], 'Shifts'));
        $rules->add($rules->existsIn(['sections_id'], 'Sections'));

        return $rules;
    }
}
