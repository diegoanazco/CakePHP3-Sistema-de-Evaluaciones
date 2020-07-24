<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssignmentsFixture
 */
class AssignmentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'assignment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de asignación', 'autoIncrement' => true, 'precision' => null],
        'academics_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un academico', 'precision' => null, 'autoIncrement' => null],
        'subjects_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un curso', 'precision' => null, 'autoIncrement' => null],
        'teachers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un docente', 'precision' => null, 'autoIncrement' => null],
        'shifts_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un turno', 'precision' => null, 'autoIncrement' => null],
        'sections_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un sección', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación.', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_assignment_academics1_idx' => ['type' => 'index', 'columns' => ['academics_id'], 'length' => []],
            'fk_assignment_subjects1_idx' => ['type' => 'index', 'columns' => ['subjects_id'], 'length' => []],
            'fk_assignment_teachers1_idx' => ['type' => 'index', 'columns' => ['teachers_id'], 'length' => []],
            'fk_assignment_shifts1_idx' => ['type' => 'index', 'columns' => ['shifts_id'], 'length' => []],
            'fk_assignment_sections1_idx' => ['type' => 'index', 'columns' => ['sections_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['assignment_id'], 'length' => []],
            'fk_assignment_academics1' => ['type' => 'foreign', 'columns' => ['academics_id'], 'references' => ['academics', 'academics_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_assignment_sections1' => ['type' => 'foreign', 'columns' => ['sections_id'], 'references' => ['sections', 'sections_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_assignment_shifts1' => ['type' => 'foreign', 'columns' => ['shifts_id'], 'references' => ['shifts', 'shifts_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_assignment_subjects1' => ['type' => 'foreign', 'columns' => ['subjects_id'], 'references' => ['subjects', 'subjects_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_assignment_teachers1' => ['type' => 'foreign', 'columns' => ['teachers_id'], 'references' => ['teachers', 'teachers_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'assignment_id' => 1,
                'academics_id' => 1,
                'subjects_id' => 1,
                'teachers_id' => 1,
                'shifts_id' => 1,
                'sections_id' => 1,
                'created' => '2020-07-21 02:19:38',
                'modified' => '2020-07-21 02:19:38',
            ],
        ];
        parent::init();
    }
}
