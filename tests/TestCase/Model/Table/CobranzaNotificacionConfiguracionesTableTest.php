<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CobranzaNotificacionConfiguracionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CobranzaNotificacionConfiguracionesTable Test Case
 */
class CobranzaNotificacionConfiguracionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CobranzaNotificacionConfiguracionesTable
     */
    public $CobranzaNotificacionConfiguraciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cobranza_notificacion_configuraciones',
        'app.general_users',
        'app.general_maestro_clientes',
        'app.cobranza_notificacion_tipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CobranzaNotificacionConfiguraciones') ? [] : ['className' => CobranzaNotificacionConfiguracionesTable::class];
        $this->CobranzaNotificacionConfiguraciones = TableRegistry::getTableLocator()->get('CobranzaNotificacionConfiguraciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CobranzaNotificacionConfiguraciones);

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
