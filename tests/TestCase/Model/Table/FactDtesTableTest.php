<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDtesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDtesTable Test Case
 */
class FactDtesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDtesTable
     */
    public $FactDtes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dtes',
        'app.general_maestro_clientes',
        'app.general_maestro_personas',
        'app.fact_dte_tipos',
        'app.fact_dte_estados',
        'app.fact_dte_movimientos',
        'app.fact_dte_pagos',
        'app.fact_sii_comercials',
        'app.fact_sii_mercaderias',
        'app.general_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FactDtes') ? [] : ['className' => FactDtesTable::class];
        $this->FactDtes = TableRegistry::getTableLocator()->get('FactDtes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDtes);

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
