<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TypesTest Entity
 *
 * @property int $types_test_id
 * @property string $types_test_description
 * @property int $types_test_weight
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class TypesTest extends Entity
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
        'types_test_description' => true,
        'types_test_weight' => true,
        'created' => true,
        'modified' => true,
    ];
}
