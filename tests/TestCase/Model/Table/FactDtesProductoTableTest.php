<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDtesProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDtesProductoTable Test Case
 */
class FactDtesProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDtesProductoTable
     */
    public $FactDtesProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dtes_producto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FactDtesProducto') ? [] : ['className' => FactDtesProductoTable::class];
        $this->FactDtesProducto = TableRegistry::getTableLocator()->get('FactDtesProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDtesProducto);

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
