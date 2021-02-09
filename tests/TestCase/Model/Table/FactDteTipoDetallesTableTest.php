<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDteTipoDetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDteTipoDetallesTable Test Case
 */
class FactDteTipoDetallesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDteTipoDetallesTable
     */
    public $FactDteTipoDetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dte_tipo_detalles',
        'app.fact_dte_tipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FactDteTipoDetalles') ? [] : ['className' => FactDteTipoDetallesTable::class];
        $this->FactDteTipoDetalles = TableRegistry::getTableLocator()->get('FactDteTipoDetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDteTipoDetalles);

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
