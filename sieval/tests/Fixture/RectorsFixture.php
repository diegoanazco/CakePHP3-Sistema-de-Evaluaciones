<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RectorsFixture
 */
class RectorsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'rectors_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de un rector.', 'autoIncrement' => true, 'precision' => null],
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un usuario', 'precision' => null, 'autoIncrement' => null],
        'college_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una Universidad', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_rectors_college_idx' => ['type' => 'index', 'columns' => ['college_id'], 'length' => []],
            'fk_rectors_users1_idx' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['rectors_id'], 'length' => []],
            'fk_rectors_college' => ['type' => 'foreign', 'columns' => ['college_id'], 'references' => ['colleges', 'college_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_rectors_users1' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'users_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'rectors_id' => 1,
                'users_id' => 1,
                'college_id' => 1,
                'created' => '2020-07-21 02:17:43',
                'modified' => '2020-07-21 02:17:43',
            ],
        ];
        parent::init();
    }
}
