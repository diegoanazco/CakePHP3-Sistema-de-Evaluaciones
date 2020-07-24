<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subject Entity
 *
 * @property int $subjects_id
 * @property int $semesters_id
 * @property int $types_subjects_id
 * @property string $subjects_name
 * @property int $subjects_credit
 * @property int $subjects_hours
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Semester $semester
 * @property \App\Model\Entity\TypesSubject $types_subject
 */
class Subject extends Entity
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
        'semesters_id' => true,
        'types_subjects_id' => true,
        'subjects_name' => true,
        'subjects_credit' => true,
        'subjects_hours' => true,
        'created' => true,
        'modified' => true,
        'semester' => true,
        'types_subject' => true,
    ];
}
