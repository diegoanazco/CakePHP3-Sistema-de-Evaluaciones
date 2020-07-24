<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnnexesFixture
 */
class AnnexesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'annexes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de anexos del examen
', 'autoIncrement' => true, 'precision' => null],
        'tests_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un examen', 'precision' => null, 'autoIncrement' => null],
        'annexes_description' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Descripción de los anexos del examen', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_annexes_tests1_idx' => ['type' => 'index', 'columns' => ['tests_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['annexes_id'], 'length' => []],
            'fk_annexes_tests1' => ['type' => 'foreign', 'columns' => ['tests_id'], 'references' => ['tests', 'tests_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'annexes_id' => 1,
                'tests_id' => 1,
                'annexes_description' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 02:21:19',
                'modified' => '2020-07-21 02:21:19',
            ],
        ];
        parent::init();
    }
}
