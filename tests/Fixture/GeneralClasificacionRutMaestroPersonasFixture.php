<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeneralClasificacionRutMaestroPersonasFixture
 *
 */
class GeneralClasificacionRutMaestroPersonasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'general_maestro_persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_maestro_cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_clasificacion_rut_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado' => ['type' => 'smallinteger', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'plazo_venta' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => '30', 'collate' => 'latin1_swedish_ci', 'comment' => 'FECHA PLAZO VENTA', 'precision' => null, 'fixed' => null],
        'plazo_compra' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => '30', 'collate' => 'latin1_swedish_ci', 'comment' => 'FECHA PLAZO COMPRA', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'general_maestro_persona_id' => ['type' => 'index', 'columns' => ['general_maestro_persona_id'], 'length' => []],
            'general_maestro_cliente_id' => ['type' => 'index', 'columns' => ['general_maestro_cliente_id'], 'length' => []],
            'general_clasificacion_rut_id' => ['type' => 'index', 'columns' => ['general_clasificacion_rut_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'general_clasificacion_rut_maestro_personas_ibfk_1' => ['type' => 'foreign', 'columns' => ['general_maestro_persona_id'], 'references' => ['general_maestro_personas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'general_clasificacion_rut_maestro_personas_ibfk_2' => ['type' => 'foreign', 'columns' => ['general_clasificacion_rut_id'], 'references' => ['general_clasificacion_ruts', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'general_clasificacion_rut_maestro_personas_ibfk_3' => ['type' => 'foreign', 'columns' => ['general_maestro_cliente_id'], 'references' => ['general_maestro_clientes', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'general_maestro_persona_id' => 1,
                'general_maestro_cliente_id' => 1,
                'general_clasificacion_rut_id' => 1,
                'estado' => 1,
                'plazo_venta' => 'Lorem ipsum dolor sit amet',
                'plazo_compra' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
