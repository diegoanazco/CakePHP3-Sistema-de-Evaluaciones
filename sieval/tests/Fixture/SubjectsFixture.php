<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubjectsFixture
 */
class SubjectsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'subjects_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de subjects', 'autoIncrement' => true, 'precision' => null],
        'semesters_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un semestre', 'precision' => null, 'autoIncrement' => null],
        'types_subjects_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un tipo de curso', 'precision' => null, 'autoIncrement' => null],
        'subjects_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre del curso', 'precision' => null, 'fixed' => null],
        'subjects_credit' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Número de créditos', 'precision' => null, 'autoIncrement' => null],
        'subjects_hours' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Número de horas del curso.', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_subjects_semesters1_idx' => ['type' => 'index', 'columns' => ['semesters_id'], 'length' => []],
            'fk_subjects_types_subjects1_idx' => ['type' => 'index', 'columns' => ['types_subjects_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['subjects_id'], 'length' => []],
            'fk_subjects_semesters1' => ['type' => 'foreign', 'columns' => ['semesters_id'], 'references' => ['semesters', 'semesters_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_subjects_types_subjects1' => ['type' => 'foreign', 'columns' => ['types_subjects_id'], 'references' => ['types_subjects', 'types_subjects'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'subjects_id' => 1,
                'semesters_id' => 1,
                'types_subjects_id' => 1,
                'subjects_name' => 'Lorem ipsum dolor sit amet',
                'subjects_credit' => 1,
                'subjects_hours' => 1,
                'created' => '2020-07-21 02:19:30',
                'modified' => '2020-07-21 02:19:30',
            ],
        ];
        parent::init();
    }
}
