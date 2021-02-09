<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeneralMaestroPersonasFixture
 *
 */
class GeneralMaestroPersonasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'general_persona_tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_regione_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_provincia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_comuna_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rut' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dv' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_paterno' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_materno' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'razon_social' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'direccion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'referencia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_fantasia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'general_persona_tipo_id' => ['type' => 'index', 'columns' => ['general_persona_tipo_id'], 'length' => []],
            'general_comuna_id' => ['type' => 'index', 'columns' => ['general_comuna_id'], 'length' => []],
            'general_provincia_id' => ['type' => 'index', 'columns' => ['general_provincia_id'], 'length' => []],
            'general_maestro_personas_ibfk_5' => ['type' => 'index', 'columns' => ['general_regione_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'rut_unico' => ['type' => 'unique', 'columns' => ['rut', 'dv'], 'length' => []],
            'general_maestro_personas_ibfk_1' => ['type' => 'foreign', 'columns' => ['general_persona_tipo_id'], 'references' => ['general_maestro_persona_tipos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'general_maestro_personas_ibfk_2' => ['type' => 'foreign', 'columns' => ['general_comuna_id'], 'references' => ['general_comunas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'general_maestro_personas_ibfk_3' => ['type' => 'foreign', 'columns' => ['general_provincia_id'], 'references' => ['general_provincias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'general_maestro_personas_ibfk_5' => ['type' => 'foreign', 'columns' => ['general_regione_id'], 'references' => ['general_regiones', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
                'general_persona_tipo_id' => 1,
                'general_regione_id' => 1,
                'general_provincia_id' => 1,
                'general_comuna_id' => 1,
                'rut' => 'Lorem ipsum d',
                'dv' => 'L',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellido_paterno' => 'Lorem ipsum dolor sit amet',
                'apellido_materno' => 'Lorem ipsum dolor sit amet',
                'razon_social' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'referencia' => 'Lorem ipsum dolor sit amet',
                'nombre_fantasia' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
