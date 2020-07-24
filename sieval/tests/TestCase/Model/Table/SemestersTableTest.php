<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SemestersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SemestersTable Test Case
 */
class SemestersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SemestersTable
     */
    public $Semesters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Semesters',
        'app.StudyPlans',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Semesters') ? [] : ['className' => SemestersTable::class];
        $this->Semesters = TableRegistry::getTableLocator()->get('Semesters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Semesters);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
