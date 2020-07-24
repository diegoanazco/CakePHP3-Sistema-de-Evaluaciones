<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesTestTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesTestTable Test Case
 */
class TypesTestTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypesTestTable
     */
    public $TypesTest;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TypesTest',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TypesTest') ? [] : ['className' => TypesTestTable::class];
        $this->TypesTest = TableRegistry::getTableLocator()->get('TypesTest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypesTest);

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
