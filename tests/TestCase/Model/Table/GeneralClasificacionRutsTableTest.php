<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralClasificacionRutsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralClasificacionRutsTable Test Case
 */
class GeneralClasificacionRutsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralClasificacionRutsTable
     */
    public $GeneralClasificacionRuts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_clasificacion_ruts',
        'app.general_clasificacion_rut_maestro_personas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeneralClasificacionRuts') ? [] : ['className' => GeneralClasificacionRutsTable::class];
        $this->GeneralClasificacionRuts = TableRegistry::getTableLocator()->get('GeneralClasificacionRuts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralClasificacionRuts);

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
