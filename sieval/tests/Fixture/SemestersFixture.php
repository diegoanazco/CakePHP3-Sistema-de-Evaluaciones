<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestersFixture
 */
class SemestersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'semesters_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Códico único del semestre', 'autoIncrement' => true, 'precision' => null],
        'study_plans_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un plan de estudio', 'precision' => null, 'autoIncrement' => null],
        'semesters_number' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Número de semestre', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_semesters_study_plans1_idx' => ['type' => 'index', 'columns' => ['study_plans_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['semesters_id'], 'length' => []],
            'fk_semesters_study_plans1' => ['type' => 'foreign', 'columns' => ['study_plans_id'], 'references' => ['study_plans', 'study_plans_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'semesters_id' => 1,
                'study_plans_id' => 1,
                'semesters_number' => 'Lor',
                'created' => '2020-07-21 02:18:50',
                'modified' => '2020-07-21 02:18:50',
            ],
        ];
        parent::init();
    }
}
