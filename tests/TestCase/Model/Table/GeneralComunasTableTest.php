<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralComunasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralComunasTable Test Case
 */
class GeneralComunasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralComunasTable
     */
    public $GeneralComunas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_comunas',
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
        $config = TableRegistry::getTableLocator()->exists('GeneralComunas') ? [] : ['className' => GeneralComunasTable::class];
        $this->GeneralComunas = TableRegistry::getTableLocator()->get('GeneralComunas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralComunas);

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
