<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralMaestroPersonaTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralMaestroPersonaTiposTable Test Case
 */
class GeneralMaestroPersonaTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralMaestroPersonaTiposTable
     */
    public $GeneralMaestroPersonaTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_maestro_persona_tipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeneralMaestroPersonaTipos') ? [] : ['className' => GeneralMaestroPersonaTiposTable::class];
        $this->GeneralMaestroPersonaTipos = TableRegistry::getTableLocator()->get('GeneralMaestroPersonaTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralMaestroPersonaTipos);

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
