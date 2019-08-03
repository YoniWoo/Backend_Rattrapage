<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PoniesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PoniesTable Test Case
 */
class PoniesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PoniesTable
     */
    public $Ponies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Ponies') ? [] : ['className' => PoniesTable::class];
        $this->Ponies = TableRegistry::getTableLocator()->get('Ponies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ponies);

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
