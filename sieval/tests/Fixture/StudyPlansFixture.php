<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudyPlansFixture
 */
class StudyPlansFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'study_plans_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de planes de estudios', 'autoIncrement' => true, 'precision' => null],
        'schools_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una escuela', 'precision' => null, 'autoIncrement' => null],
        'study_plans_year' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Año del plan de estudio.', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_study_plans_schools1_idx' => ['type' => 'index', 'columns' => ['schools_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['study_plans_id'], 'length' => []],
            'fk_study_plans_schools1' => ['type' => 'foreign', 'columns' => ['schools_id'], 'references' => ['schools', 'schools_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'study_plans_id' => 1,
                'schools_id' => 1,
                'study_plans_year' => 'Lorem ip',
                'created' => '2020-07-21 02:19:02',
                'modified' => '2020-07-21 02:19:02',
            ],
        ];
        parent::init();
    }
}
