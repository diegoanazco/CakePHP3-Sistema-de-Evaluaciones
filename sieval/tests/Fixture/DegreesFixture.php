<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DegreesFixture
 */
class DegreesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'degrees_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de grados academicos', 'autoIncrement' => true, 'precision' => null],
        'degrees_description' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Descripcción del grado academico', 'precision' => null, 'fixed' => null],
        'degrees_acronym' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Acrónimo del grado academico', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de Creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['degrees_id'], 'length' => []],
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
                'degrees_id' => 1,
                'degrees_description' => 'Lorem ipsum dolor sit amet',
                'degrees_acronym' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 02:11:31',
                'modified' => '2020-07-21 02:11:31',
            ],
        ];
        parent::init();
    }
}
