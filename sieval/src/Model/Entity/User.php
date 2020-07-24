<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * User Entity
 *
 * @property int $users_id
 * @property int $roles_id
 * @property int $degrees_id
 * @property string $users_name
 * @property string $users_fathersurname
 * @property string $users_mothersurname
 * @property string $users_email
 * @property string $users_password
 * @property \Cake\I18n\FrozenDate $users_birthday
 * @property string $users_cellphone
 * @property bool|null $users_status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Degree $degree
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'roles_id' => true,
        'degrees_id' => true,
        'users_name' => true,
        'users_fathersurname' => true,
        'users_mothersurname' => true,
        'users_email' => true,
        'users_password' => true,
        'users_birthday' => true,
        'users_cellphone' => true,
        'users_status' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
        'degree' => true,
    ];

    // Add this method
    protected function _setUsers_password($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }

}

