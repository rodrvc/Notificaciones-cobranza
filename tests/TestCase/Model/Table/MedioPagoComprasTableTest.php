<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedioPagoComprasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedioPagoComprasTable Test Case
 */
class MedioPagoComprasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MedioPagoComprasTable
     */
    public $MedioPagoCompras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.medio_pago_compras',
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
        $config = TableRegistry::getTableLocator()->exists('MedioPagoCompras') ? [] : ['className' => MedioPagoComprasTable::class];
        $this->MedioPagoCompras = TableRegistry::getTableLocator()->get('MedioPagoCompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MedioPagoCompras);

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
