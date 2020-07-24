<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Degree Entity
 *
 * @property int $degrees_id
 * @property string $degrees_description
 * @property string $degrees_acronym
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Degree extends Entity
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
        'degrees_description' => true,
        'degrees_acronym' => true,
        'created' => true,
        'modified' => true,
    ];
}
