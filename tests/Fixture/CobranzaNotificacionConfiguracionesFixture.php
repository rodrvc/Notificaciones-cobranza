<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CobranzaNotificacionConfiguracionesFixture
 *
 */
class CobranzaNotificacionConfiguracionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'general_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_maestro_cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cobranza_notificacion_tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dias' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'mensaje' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'asunto' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_cobranza_notif_conf_cobranza_notif_tipos_1' => ['type' => 'index', 'columns' => ['cobranza_notificacion_tipo_id'], 'length' => []],
            'general_user_id' => ['type' => 'index', 'columns' => ['general_user_id'], 'length' => []],
            'cobranza_notificacion_configuraciones_ibfk_2' => ['type' => 'index', 'columns' => ['general_maestro_cliente_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cobranza_notificacion_configuraciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['general_user_id'], 'references' => ['general_users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'cobranza_notificacion_configuraciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['general_maestro_cliente_id'], 'references' => ['general_maestro_clientes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'cobranza_notificacion_configuraciones_ibkf_3' => ['type' => 'foreign', 'columns' => ['cobranza_notificacion_tipo_id'], 'references' => ['cobranza_notificacion_tipos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
                'general_user_id' => 1,
                'general_maestro_cliente_id' => 1,
                'cobranza_notificacion_tipo_id' => 1,
                'dias' => 1,
                'activo' => 1,
                'mensaje' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2021-02-05 10:32:09',
                'modified' => '2021-02-05 10:32:09',
                'asunto' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
