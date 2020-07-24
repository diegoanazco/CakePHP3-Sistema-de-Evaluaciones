<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesSubjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesSubjectsTable Test Case
 */
class TypesSubjectsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypesSubjectsTable
     */
    public $TypesSubjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TypesSubjects',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TypesSubjects') ? [] : ['className' => TypesSubjectsTable::class];
        $this->TypesSubjects = TableRegistry::getTableLocator()->get('TypesSubjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypesSubjects);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
