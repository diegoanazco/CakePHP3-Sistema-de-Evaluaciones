<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnnexesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnnexesTable Test Case
 */
class AnnexesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AnnexesTable
     */
    public $Annexes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Annexes',
        'app.Tests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Annexes') ? [] : ['className' => AnnexesTable::class];
        $this->Annexes = TableRegistry::getTableLocator()->get('Annexes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Annexes);

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
