<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedioPagoVentasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedioPagoVentasTable Test Case
 */
class MedioPagoVentasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MedioPagoVentasTable
     */
    public $MedioPagoVentas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.medio_pago_ventas',
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
        $config = TableRegistry::getTableLocator()->exists('MedioPagoVentas') ? [] : ['className' => MedioPagoVentasTable::class];
        $this->MedioPagoVentas = TableRegistry::getTableLocator()->get('MedioPagoVentas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MedioPagoVentas);

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
