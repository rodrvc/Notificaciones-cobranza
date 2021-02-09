<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FactDtePagosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FactDtePagosTable Test Case
 */
class FactDtePagosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FactDtePagosTable
     */
    public $FactDtePagos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fact_dte_pagos',
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
        $config = TableRegistry::getTableLocator()->exists('FactDtePagos') ? [] : ['className' => FactDtePagosTable::class];
        $this->FactDtePagos = TableRegistry::getTableLocator()->get('FactDtePagos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FactDtePagos);

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
