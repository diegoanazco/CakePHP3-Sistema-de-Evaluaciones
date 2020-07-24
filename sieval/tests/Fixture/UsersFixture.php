<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Único de usuarios', 'autoIncrement' => true, 'precision' => null],
        'roles_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un rol', 'precision' => null, 'autoIncrement' => null],
        'degrees_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código Unico de referencia a un grado academico', 'precision' => null, 'autoIncrement' => null],
        'users_name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre del usuario', 'precision' => null, 'fixed' => null],
        'users_fathersurname' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Apellido Paterno del usuario', 'precision' => null, 'fixed' => null],
        'users_mothersurname' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Apellido Materno del usuario', 'precision' => null, 'fixed' => null],
        'users_email' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Email del usuario', 'precision' => null, 'fixed' => null],
        'users_password' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Password del usuario', 'precision' => null, 'fixed' => null],
        'users_birthday' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de nacimiento del Usuario', 'precision' => null],
        'users_cellphone' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Celular del usuario', 'precision' => null, 'fixed' => null],
        'users_status' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => 'Estado Activo/Inactivo del usuario.', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de Creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de ultima modificación
', 'precision' => null],
        '_indexes' => [
            'fk_users_roles1_idx' => ['type' => 'index', 'columns' => ['roles_id'], 'length' => []],
            'fk_users_degrees1_idx' => ['type' => 'index', 'columns' => ['degrees_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['users_id'], 'length' => []],
            'fk_users_degrees1' => ['type' => 'foreign', 'columns' => ['degrees_id'], 'references' => ['degrees', 'degrees_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_users_roles1' => ['type' => 'foreign', 'columns' => ['roles_id'], 'references' => ['roles', 'roles_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'users_id' => 1,
                'roles_id' => 1,
                'degrees_id' => 1,
                'users_name' => 'Lorem ipsum dolor sit amet',
                'users_fathersurname' => 'Lorem ipsum dolor sit amet',
                'users_mothersurname' => 'Lorem ipsum dolor sit amet',
                'users_email' => 'Lorem ipsum dolor sit amet',
                'users_password' => 'Lorem ipsum dolor sit amet',
                'users_birthday' => '2020-07-21',
                'users_cellphone' => 'Lorem i',
                'users_status' => 1,
                'created' => '2020-07-21 00:40:33',
                'modified' => '2020-07-21 00:40:33',
            ],
        ];
        parent::init();
    }
}
