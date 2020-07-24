<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * College Entity
 *
 * @property int $college_id
 * @property string $college_name
 * @property string $college_address
 * @property string $college_phone
 * @property string $college_cellphone
 * @property string $college_email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class College extends Entity
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
        'college_name' => true,
        'college_address' => true,
        'college_phone' => true,
        'college_cellphone' => true,
        'college_email' => true,
        'created' => true,
        'modified' => true,
    ];
}
