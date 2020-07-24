<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DirectorsFixture
 */
class DirectorsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'directors_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de Directores', 'autoIncrement' => true, 'precision' => null],
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un usuario', 'precision' => null, 'autoIncrement' => null],
        'departments_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un departamento
', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de última modificación', 'precision' => null],
        '_indexes' => [
            'fk_directors_departments1_idx' => ['type' => 'index', 'columns' => ['departments_id'], 'length' => []],
            'fk_directors_users1_idx' => ['type' => 'index', 'columns' => ['users_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['directors_id'], 'length' => []],
            'fk_directors_departments1' => ['type' => 'foreign', 'columns' => ['departments_id'], 'references' => ['departments', 'departments_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_directors_users1' => ['type' => 'foreign', 'columns' => ['users_id'], 'references' => ['users', 'users_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'directors_id' => 1,
                'users_id' => 1,
                'departments_id' => 1,
                'created' => '2020-07-21 02:18:00',
                'modified' => '2020-07-21 02:18:00',
            ],
        ];
        parent::init();
    }
}
