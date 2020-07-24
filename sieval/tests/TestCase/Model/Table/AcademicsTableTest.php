<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademicsTable Test Case
 */
class AcademicsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademicsTable
     */
    public $Academics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Academics',
        'app.Coordinators',
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
        $config = TableRegistry::getTableLocator()->exists('Academics') ? [] : ['className' => AcademicsTable::class];
        $this->Academics = TableRegistry::getTableLocator()->get('Academics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Academics);

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
