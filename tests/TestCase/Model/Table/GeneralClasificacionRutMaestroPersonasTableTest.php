<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralClasificacionRutMaestroPersonasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralClasificacionRutMaestroPersonasTable Test Case
 */
class GeneralClasificacionRutMaestroPersonasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralClasificacionRutMaestroPersonasTable
     */
    public $GeneralClasificacionRutMaestroPersonas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_clasificacion_rut_maestro_personas',
        'app.general_maestro_personas',
        'app.general_maestro_clientes',
        'app.general_clasificacion_ruts',
        'app.medio_pago_ventas',
        'app.medio_pago_compras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeneralClasificacionRutMaestroPersonas') ? [] : ['className' => GeneralClasificacionRutMaestroPersonasTable::class];
        $this->GeneralClasificacionRutMaestroPersonas = TableRegistry::getTableLocator()->get('GeneralClasificacionRutMaestroPersonas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralClasificacionRutMaestroPersonas);

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
