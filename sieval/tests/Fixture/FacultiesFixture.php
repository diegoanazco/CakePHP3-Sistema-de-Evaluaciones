<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacultiesFixture
 */
class FacultiesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'faculties_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de faculties', 'autoIncrement' => true, 'precision' => null],
        'college_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una universidad', 'precision' => null, 'autoIncrement' => null],
        'faculties_name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre de la facultad', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación.', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_faculties_college1_idx' => ['type' => 'index', 'columns' => ['college_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['faculties_id'], 'length' => []],
            'fk_faculties_college1' => ['type' => 'foreign', 'columns' => ['college_id'], 'references' => ['colleges', 'college_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'faculties_id' => 1,
                'college_id' => 1,
                'faculties_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 02:18:28',
                'modified' => '2020-07-21 02:18:28',
            ],
        ];
        parent::init();
    }
}
