<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordinatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordinatorsTable Test Case
 */
class CoordinatorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordinatorsTable
     */
    public $Coordinators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Coordinators',
        'app.Users',
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
        $config = TableRegistry::getTableLocator()->exists('Coordinators') ? [] : ['className' => CoordinatorsTable::class];
        $this->Coordinators = TableRegistry::getTableLocator()->get('Coordinators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coordinators);

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
