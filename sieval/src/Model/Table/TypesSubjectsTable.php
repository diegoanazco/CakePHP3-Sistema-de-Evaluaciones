<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypesSubjects Model
 *
 * @method \App\Model\Entity\TypesSubject get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypesSubject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypesSubject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypesSubject|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesSubject saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesSubject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypesSubject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypesSubject findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TypesSubjectsTable extends Table
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

        $this->setTable('types_subjects');
        $this->setDisplayField('types_subjects_description');
        $this->setPrimaryKey('types_subjects');

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
            ->integer('types_subjects')
            ->allowEmptyString('types_subjects', null, 'create');

        $validator
            ->scalar('types_subjects_description')
            ->maxLength('types_subjects_description', 45)
            ->requirePresence('types_subjects_description', 'create')
            ->notEmptyString('types_subjects_description');

        return $validator;
    }
}
