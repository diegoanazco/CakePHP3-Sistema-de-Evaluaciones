<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Annex Entity
 *
 * @property int $annexes_id
 * @property int $tests_id
 * @property string $annexes_description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Test $test
 */
class Annex extends Entity
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
        'tests_id' => true,
        'annexes_description' => true,
        'created' => true,
        'modified' => true,
        'test' => true,
    ];
}
