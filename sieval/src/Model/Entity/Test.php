<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Test Entity
 *
 * @property int $tests_id
 * @property int $assignment_id
 * @property int $types_test_id
 * @property int $semesters_id
 * @property int $schools_id
 * @property \Cake\I18n\FrozenDate $test_date
 * @property \Cake\I18n\FrozenTime $tests_start
 * @property \Cake\I18n\FrozenTime $tests_end
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Assignment $assignment
 * @property \App\Model\Entity\TypesTest $types_test
 * @property \App\Model\Entity\Semester $semester
 * @property \App\Model\Entity\School $school
 */
class Test extends Entity
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
        'assignment_id' => true,
        'types_test_id' => true,
        'semesters_id' => true,
        'schools_id' => true,
        'test_date' => true,
        'tests_start' => true,
        'tests_end' => true,
        'created' => true,
        'modified' => true,
        'assignment' => true,
        'types_test' => true,
        'semester' => true,
        'school' => true,
    ];
}
