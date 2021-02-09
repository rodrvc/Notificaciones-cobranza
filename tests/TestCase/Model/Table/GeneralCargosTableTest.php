<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralCargosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralCargosTable Test Case
 */
class GeneralCargosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralCargosTable
     */
    public $GeneralCargos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_cargos',
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
        $config = TableRegistry::getTableLocator()->exists('GeneralCargos') ? [] : ['className' => GeneralCargosTable::class];
        $this->GeneralCargos = TableRegistry::getTableLocator()->get('GeneralCargos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralCargos);

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
