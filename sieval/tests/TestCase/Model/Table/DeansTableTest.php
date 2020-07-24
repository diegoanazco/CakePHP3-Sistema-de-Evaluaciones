<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeansTable Test Case
 */
class DeansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeansTable
     */
    public $Deans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Deans',
        'app.Users',
        'app.Faculties',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Deans') ? [] : ['className' => DeansTable::class];
        $this->Deans = TableRegistry::getTableLocator()->get('Deans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Deans);

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
