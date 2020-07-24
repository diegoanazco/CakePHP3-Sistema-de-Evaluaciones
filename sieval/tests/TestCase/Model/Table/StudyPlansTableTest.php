<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudyPlansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudyPlansTable Test Case
 */
class StudyPlansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudyPlansTable
     */
    public $StudyPlans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StudyPlans',
        'app.Schools',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StudyPlans') ? [] : ['className' => StudyPlansTable::class];
        $this->StudyPlans = TableRegistry::getTableLocator()->get('StudyPlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StudyPlans);

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
