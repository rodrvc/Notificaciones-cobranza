<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CobranzaEstadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CobranzaEstadosTable Test Case
 */
class CobranzaEstadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CobranzaEstadosTable
     */
    public $CobranzaEstados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cobranza_estados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CobranzaEstados') ? [] : ['className' => CobranzaEstadosTable::class];
        $this->CobranzaEstados = TableRegistry::getTableLocator()->get('CobranzaEstados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CobranzaEstados);

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
