<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RidersTable Test Case
 */
class RidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RidersTable
     */
    public $Riders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Riders',
        'app.Ponies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Riders') ? [] : ['className' => RidersTable::class];
        $this->Riders = TableRegistry::getTableLocator()->get('Riders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Riders);

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
