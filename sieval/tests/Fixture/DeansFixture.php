<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeansFixture
 */
class DeansFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'deans_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de decanos', 'autoIncrement' => true, 'precision' => null],
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un usuario', 'precision' => null, 'autoIncrement' => null],
        'faculties_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a una facultad', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación.', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_deans_faculties1_idx' => ['type' => 'index', 'columns' => ['faculties_id'], 'length' => []],
            'fk_deans_users1_idx' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['deans_id'], 'length' => []],
            'fk_deans_faculties1' => ['type' => 'foreign', 'columns' => ['faculties_id'], 'references' => ['faculties', 'faculties_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_deans_users1' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'users_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'deans_id' => 1,
                'users_id' => 1,
                'faculties_id' => 1,
                'created' => '2020-07-21 02:18:22',
                'modified' => '2020-07-21 02:18:22',
            ],
        ];
        parent::init();
    }
}
