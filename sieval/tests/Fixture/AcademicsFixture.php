<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AcademicsFixture
 */
class AcademicsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'academics_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de academics', 'autoIncrement' => true, 'precision' => null],
        'coordinators_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un coordinador', 'precision' => null, 'autoIncrement' => null],
        'schools_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una escuela', 'precision' => null, 'autoIncrement' => null],
        'academics_year' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Año académico.', 'precision' => null, 'autoIncrement' => null],
        'academics_period' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Periodó del año académico.', 'precision' => null, 'fixed' => null],
        'academics_start' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'academics_end' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_academics_coordinators1_idx' => ['type' => 'index', 'columns' => ['coordinators_id'], 'length' => []],
            'fk_academics_schools1_idx' => ['type' => 'index', 'columns' => ['schools_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['academics_id'], 'length' => []],
            'fk_academics_coordinators1' => ['type' => 'foreign', 'columns' => ['coordinators_id'], 'references' => ['coordinators', 'coordinators_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_academics_schools1' => ['type' => 'foreign', 'columns' => ['schools_id'], 'references' => ['schools', 'schools_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'academics_id' => 1,
                'coordinators_id' => 1,
                'schools_id' => 1,
                'academics_year' => 1,
                'academics_period' => 'Lo',
                'academics_start' => '2020-07-21',
                'academics_end' => '2020-07-21',
                'created' => '2020-07-21 02:19:12',
                'modified' => '2020-07-21 02:19:12',
            ],
        ];
        parent::init();
    }
}
