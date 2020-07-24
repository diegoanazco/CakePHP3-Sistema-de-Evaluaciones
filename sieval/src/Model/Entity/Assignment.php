<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assignment Entity
 *
 * @property int $assignment_id
 * @property int $academics_id
 * @property int $subjects_id
 * @property int $teachers_id
 * @property int $shifts_id
 * @property int $sections_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Academic $academic
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Shift $shift
 * @property \App\Model\Entity\Section $section
 */
class Assignment extends Entity
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
        'academics_id' => true,
        'subjects_id' => true,
        'teachers_id' => true,
        'shifts_id' => true,
        'sections_id' => true,
        'created' => true,
        'modified' => true,
        'academic' => true,
        'subject' => true,
        'teacher' => true,
        'shift' => true,
        'section' => true,
    ];
}
