<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralUsersTable Test Case
 */
class GeneralUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralUsersTable
     */
    public $GeneralUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_users',
        'app.general_cargos',
        'app.cobranza_notificacion_configuraciones',
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
        $config = TableRegistry::getTableLocator()->exists('GeneralUsers') ? [] : ['className' => GeneralUsersTable::class];
        $this->GeneralUsers = TableRegistry::getTableLocator()->get('GeneralUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralUsers);

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
