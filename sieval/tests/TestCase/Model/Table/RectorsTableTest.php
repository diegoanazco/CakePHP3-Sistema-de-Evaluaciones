<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RectorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RectorsTable Test Case
 */
class RectorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RectorsTable
     */
    public $Rectors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Rectors',
        'app.Users',
        'app.Colleges',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Rectors') ? [] : ['className' => RectorsTable::class];
        $this->Rectors = TableRegistry::getTableLocator()->get('Rectors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rectors);

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
