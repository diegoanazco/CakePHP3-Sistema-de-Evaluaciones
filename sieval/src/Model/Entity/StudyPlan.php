<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StudyPlan Entity
 *
 * @property int $study_plans_id
 * @property int $schools_id
 * @property string $study_plans_year
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\School $school
 */
class StudyPlan extends Entity
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
        'schools_id' => true,
        'study_plans_year' => true,
        'created' => true,
        'modified' => true,
        'school' => true,
    ];
}
