<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Academic Entity
 *
 * @property int $academics_id
 * @property int $coordinators_id
 * @property int $schools_id
 * @property int $academics_year
 * @property string $academics_period
 * @property \Cake\I18n\FrozenDate $academics_start
 * @property \Cake\I18n\FrozenDate $academics_end
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Coordinator $coordinator
 * @property \App\Model\Entity\School $school
 */
class Academic extends Entity
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
        'coordinators_id' => true,
        'schools_id' => true,
        'academics_year' => true,
        'academics_period' => true,
        'academics_start' => true,
        'academics_end' => true,
        'created' => true,
        'modified' => true,
        'coordinator' => true,
        'school' => true,
    ];
}
