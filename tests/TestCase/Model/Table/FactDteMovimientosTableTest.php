<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDteMovimientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDteMovimientosTable Test Case
 */
class FactDteMovimientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDteMovimientosTable
     */
    public $FactDteMovimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dte_movimientos',
        'app.fact_dtes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FactDteMovimientos') ? [] : ['className' => FactDteMovimientosTable::class];
        $this->FactDteMovimientos = TableRegistry::getTableLocator()->get('FactDteMovimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDteMovimientos);

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
