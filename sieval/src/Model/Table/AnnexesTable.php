<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Annexes Model
 *
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\BelongsTo $Tests
 *
 * @method \App\Model\Entity\Annex get($primaryKey, $options = [])
 * @method \App\Model\Entity\Annex newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Annex[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Annex|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Annex saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Annex patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Annex[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Annex findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AnnexesTable extends Table
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

        $this->setTable('annexes');
        $this->setDisplayField('annexes_id');
        $this->setPrimaryKey('annexes_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tests', [
            'foreignKey' => 'tests_id',
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
            ->integer('annexes_id')
            ->allowEmptyString('annexes_id', null, 'create');

        $validator
            ->scalar('annexes_description')
            ->maxLength('annexes_description', 300)
            ->requirePresence('annexes_description', 'create')
            ->notEmptyString('annexes_description');

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
        $rules->add($rules->existsIn(['tests_id'], 'Tests'));

        return $rules;
    }
}
