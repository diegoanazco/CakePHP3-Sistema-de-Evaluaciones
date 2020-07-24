<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $questions_id
 * @property int $tests_id
 * @property int $questions_score
 * @property string $questions_header
 * @property string|null $questions_photo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Test $test
 */
class Question extends Entity
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
        'questions_score' => true,
        'questions_header' => true,
        'questions_photo' => true,
        'created' => true,
        'modified' => true,
        'test' => true,
    ];
}
