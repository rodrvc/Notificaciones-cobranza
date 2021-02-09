<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralMaestroClientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralMaestroClientesTable Test Case
 */
class GeneralMaestroClientesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralMaestroClientesTable
     */
    public $GeneralMaestroClientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_maestro_clientes',
        'app.general_maestro_personas',
        'app.cobranza_notificacion_configuraciones',
        'app.fact_dtes',
        'app.general_clasificacion_rut_maestro_personas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeneralMaestroClientes') ? [] : ['className' => GeneralMaestroClientesTable::class];
        $this->GeneralMaestroClientes = TableRegistry::getTableLocator()->get('GeneralMaestroClientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralMaestroClientes);

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
