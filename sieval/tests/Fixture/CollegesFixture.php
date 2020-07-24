<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CollegesFixture
 */
class CollegesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'college_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Único de college', 'autoIncrement' => true, 'precision' => null],
        'college_name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre de la Universidad', 'precision' => null, 'fixed' => null],
        'college_address' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Dirección de la universidad', 'precision' => null, 'fixed' => null],
        'college_phone' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Teléfono fijo de la universidad.', 'precision' => null, 'fixed' => null],
        'college_cellphone' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Teléfono celular de la universidad', 'precision' => null, 'fixed' => null],
        'college_email' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Correo de la universidad.', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['college_id'], 'length' => []],
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
                'college_id' => 1,
                'college_name' => 'Lorem ipsum dolor sit amet',
                'college_address' => 'Lorem ipsum dolor sit amet',
                'college_phone' => 'Lorem ip',
                'college_cellphone' => 'Lorem i',
                'college_email' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 02:17:50',
                'modified' => '2020-07-21 02:17:50',
            ],
        ];
        parent::init();
    }
}
