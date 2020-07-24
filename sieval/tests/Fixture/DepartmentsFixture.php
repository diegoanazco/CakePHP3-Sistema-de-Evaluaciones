<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartmentsFixture
 */
class DepartmentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'departments_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de departamentos', 'autoIncrement' => true, 'precision' => null],
        'faculties_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una facultad', 'precision' => null, 'autoIncrement' => null],
        'departments_name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre del departamento.', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_departments_faculties1_idx' => ['type' => 'index', 'columns' => ['faculties_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['departments_id'], 'length' => []],
            'fk_departments_faculties1' => ['type' => 'foreign', 'columns' => ['faculties_id'], 'references' => ['faculties', 'faculties_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'departments_id' => 1,
                'faculties_id' => 1,
                'departments_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 02:18:37',
                'modified' => '2020-07-21 02:18:37',
            ],
        ];
        parent::init();
    }
}
