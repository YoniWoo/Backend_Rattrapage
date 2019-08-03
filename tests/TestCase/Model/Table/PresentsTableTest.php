<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresentsTable Test Case
 */
class PresentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresentsTable
     */
    public $Presents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Presents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Presents') ? [] : ['className' => PresentsTable::class];
        $this->Presents = TableRegistry::getTableLocator()->get('Presents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Presents);

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
