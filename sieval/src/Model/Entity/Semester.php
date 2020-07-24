<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Semester Entity
 *
 * @property int $semesters_id
 * @property int $study_plans_id
 * @property string $semesters_number
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\StudyPlan $study_plan
 */
class Semester extends Entity
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
        'study_plans_id' => true,
        'semesters_number' => true,
        'created' => true,
        'modified' => true,
        'study_plan' => true,
    ];
}
