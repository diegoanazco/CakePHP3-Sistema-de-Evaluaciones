<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'questions_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código único de preguntas', 'autoIncrement' => true, 'precision' => null],
        'tests_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código que referencia los exámenes', 'precision' => null, 'autoIncrement' => null],
        'questions_score' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Puntaje de la pregunta', 'precision' => null, 'autoIncrement' => null],
        'questions_header' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Encabezado de la pregunta', 'precision' => null, 'fixed' => null],
        'questions_photo' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de creación', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Fecha de la última modificación.', 'precision' => null],
        '_indexes' => [
            'fk_questions_tests1_idx' => ['type' => 'index', 'columns' => ['tests_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['questions_id'], 'length' => []],
            'fk_questions_tests1' => ['type' => 'foreign', 'columns' => ['tests_id'], 'references' => ['tests', 'tests_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'questions_id' => 1,
                'tests_id' => 1,
                'questions_score' => 1,
                'questions_header' => 'Lorem ipsum dolor sit amet',
                'questions_photo' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-07-21 21:52:59',
                'modified' => '2020-07-21 21:52:59',
            ],
        ];
        parent::init();
    }
}
