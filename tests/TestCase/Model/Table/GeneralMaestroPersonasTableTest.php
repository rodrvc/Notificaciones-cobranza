<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralMaestroPersonasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralMaestroPersonasTable Test Case
 */
class GeneralMaestroPersonasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralMaestroPersonasTable
     */
    public $GeneralMaestroPersonas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_maestro_personas',
        'app.general_maestro_persona_tipos',
        'app.general_regiones',
        'app.general_provincias',
        'app.general_comunas',
        'app.fact_dtes',
        'app.general_clasificacion_rut_maestro_personas',
        'app.general_maestro_clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeneralMaestroPersonas') ? [] : ['className' => GeneralMaestroPersonasTable::class];
        $this->GeneralMaestroPersonas = TableRegistry::getTableLocator()->get('GeneralMaestroPersonas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralMaestroPersonas);

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
