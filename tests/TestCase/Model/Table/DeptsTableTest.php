<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeptsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeptsTable Test Case
 */
class DeptsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeptsTable
     */
    public $Depts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.depts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Depts') ? [] : ['className' => DeptsTable::class];
        $this->Depts = TableRegistry::getTableLocator()->get('Depts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Depts);

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
