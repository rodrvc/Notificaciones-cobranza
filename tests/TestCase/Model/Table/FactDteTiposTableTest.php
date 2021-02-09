<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDteTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDteTiposTable Test Case
 */
class FactDteTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDteTiposTable
     */
    public $FactDteTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dte_tipos',
        'app.fact_dte_tipo_detalles',
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
        $config = TableRegistry::getTableLocator()->exists('FactDteTipos') ? [] : ['className' => FactDteTiposTable::class];
        $this->FactDteTipos = TableRegistry::getTableLocator()->get('FactDteTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDteTipos);

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
