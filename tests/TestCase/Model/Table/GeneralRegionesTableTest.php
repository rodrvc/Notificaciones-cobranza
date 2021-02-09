<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralRegionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralRegionesTable Test Case
 */
class GeneralRegionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralRegionesTable
     */
    public $GeneralRegiones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_regiones',
        'app.general_maestro_personas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeneralRegiones') ? [] : ['className' => GeneralRegionesTable::class];
        $this->GeneralRegiones = TableRegistry::getTableLocator()->get('GeneralRegiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralRegiones);

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
