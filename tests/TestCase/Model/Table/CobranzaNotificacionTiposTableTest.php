<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CobranzaNotificacionTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CobranzaNotificacionTiposTable Test Case
 */
class CobranzaNotificacionTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CobranzaNotificacionTiposTable
     */
    public $CobranzaNotificacionTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cobranza_notificacion_tipos',
        'app.cobranza_notificacion_configuraciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CobranzaNotificacionTipos') ? [] : ['className' => CobranzaNotificacionTiposTable::class];
        $this->CobranzaNotificacionTipos = TableRegistry::getTableLocator()->get('CobranzaNotificacionTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CobranzaNotificacionTipos);

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
