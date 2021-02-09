<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralProvinciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralProvinciasTable Test Case
 */
class GeneralProvinciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralProvinciasTable
     */
    public $GeneralProvincias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_provincias',
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
        $config = TableRegistry::getTableLocator()->exists('GeneralProvincias') ? [] : ['className' => GeneralProvinciasTable::class];
        $this->GeneralProvincias = TableRegistry::getTableLocator()->get('GeneralProvincias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralProvincias);

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
