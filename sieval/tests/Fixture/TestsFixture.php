<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestsFixture
 */
class TestsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'tests_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Único de evaluaciones.', 'autoIncrement' => true, 'precision' => null],
        'assignment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una asignación', 'precision' => null, 'autoIncrement' => null],
        'types_test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un tipo de examen', 'precision' => null, 'autoIncrement' => null],
        'semesters_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un semestre', 'precision' => null, 'autoIncrement' => null],
        'schools_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una escuela', 'precision' => null, 'autoIncrement' => null],
        'test_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Día de fecha del examen', 'precision' => null],
        'tests_start' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Hora de inicio del examen', 'precision' => null],
        'tests_end' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Hora de fin del examen', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación.', 'precision' => null],
        '_indexes' => [
            'fk_tests_assignments1_idx' => ['type' => 'index', 'columns' => ['assignment_id'], 'length' => []],
            'fk_tests_types_test1_idx' => ['type' => 'index', 'columns' => ['types_test_id'], 'length' => []],
            'fk_tests_schools1_idx' => ['type' => 'index', 'columns' => ['schools_id'], 'length' => []],
            'fk_tests_semesters1_idx' => ['type' => 'index', 'columns' => ['semesters_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['tests_id'], 'length' => []],
            'fk_tests_assignments1' => ['type' => 'foreign', 'columns' => ['assignment_id'], 'references' => ['assignments', 'assignment_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tests_schools1' => ['type' => 'foreign', 'columns' => ['schools_id'], 'references' => ['schools', 'schools_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tests_semesters1' => ['type' => 'foreign', 'columns' => ['semesters_id'], 'references' => ['semesters', 'semesters_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tests_types_test1' => ['type' => 'foreign', 'columns' => ['types_test_id'], 'references' => ['types_test', 'types_test_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'tests_id' => 1,
                'assignment_id' => 1,
                'types_test_id' => 1,
                'semesters_id' => 1,
                'schools_id' => 1,
                'test_date' => '2020-07-21',
                'tests_start' => '02:19:47',
                'tests_end' => '02:19:47',
                'created' => '2020-07-21 02:19:47',
                'modified' => '2020-07-21 02:19:47',
            ],
        ];
        parent::init();
    }
}
