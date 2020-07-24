<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TypesTestFixture
 */
class TypesTestFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'types_test';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'types_test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de tipos de exámenes', 'autoIncrement' => true, 'precision' => null],
        'types_test_description' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Descripción de los tipos de exámenes', 'precision' => null, 'fixed' => null],
        'types_test_weight' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Peso del examen', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de Creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['types_test_id'], 'length' => []],
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
                'types_test_id' => 1,
                'types_test_description' => 'Lorem ipsum dolor sit amet',
                'types_test_weight' => 1,
                'created' => '2020-07-21 02:20:02',
                'modified' => '2020-07-21 02:20:02',
            ],
        ];
        parent::init();
    }
}
