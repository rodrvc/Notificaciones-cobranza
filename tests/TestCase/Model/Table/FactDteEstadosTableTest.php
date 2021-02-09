<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDteEstadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDteEstadosTable Test Case
 */
class FactDteEstadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDteEstadosTable
     */
    public $FactDteEstados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dte_estados',
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
        $config = TableRegistry::getTableLocator()->exists('FactDteEstados') ? [] : ['className' => FactDteEstadosTable::class];
        $this->FactDteEstados = TableRegistry::getTableLocator()->get('FactDteEstados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDteEstados);

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
