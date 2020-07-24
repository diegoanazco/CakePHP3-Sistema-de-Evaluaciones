<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchoolsFixture
 */
class SchoolsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'schools_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de escuelas', 'autoIncrement' => true, 'precision' => null],
        'departments_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un departamento', 'precision' => null, 'autoIncrement' => null],
        'schools_name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre de la escuela', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_schools_departments1_idx' => ['type' => 'index', 'columns' => ['departments_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['schools_id'], 'length' => []],
            'fk_schools_departments1' => ['type' => 'foreign', 'columns' => ['departments_id'], 'references' => ['departments', 'departments_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'schools_id' => 1,
                'departments_id' => 1,
                'schools_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 02:18:43',
                'modified' => '2020-07-21 02:18:43',
            ],
        ];
        parent::init();
    }
}
