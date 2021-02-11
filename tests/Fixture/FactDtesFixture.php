<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FactDtesFixture
 *
 */
class FactDtesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'general_maestro_cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'general_maestro_persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'folio' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fact_dte_tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fact_dte_estado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '1 SII; 2 Recepcionada;3:contabilizada;4:rechazada', 'precision' => null, 'autoIncrement' => null],
        'fact_dte_movimiento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fact_dte_pago_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => '0:  Pendiente - 
2:  Cancelado/pago - 
3:  Doc con cheque', 'precision' => null, 'autoIncrement' => null],
        'fecha_pago' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_emision' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_vencimiento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'abono' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'saldo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descuento' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monto_neto' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monto_exento' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monto_iva' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monto_total' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observacion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'referencias' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fact_sii_comercial_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_contrato' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_embarque' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_llegada' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'pais_origen' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'incoterms' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipocambio' => ['type' => 'float', 'length' => 11, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'fact_sii_mercaderia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'acuse_recibo' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'ACUSE DE RECIBO MERCADERIA', 'precision' => null],
        'recepcionado' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => '0: NO-RECEPCIONADO
1: RECEPCIONADO

/ Estado de Recepcion de mercaderia', 'precision' => null],
        'contabilizado' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => '0: NO-CONTABILIZADO
1: CONTABILIZADO

/ Recepcion de mercaderia si esta contabilizado', 'precision' => null],
        'nota_credito' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => 'Cuando se Realiza una nota de credito el DTE queda en 1', 'precision' => null, 'autoIncrement' => null],
        'general_user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => 'USUARIO QUIEN REALIZA LA FACTURACION', 'precision' => null, 'autoIncrement' => null],
        'dte_ref' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => 'DTE REFERENCIA ID PARA SABER EL DTE PADRE (PARA GUIAS Y NC)', 'precision' => null, 'autoIncrement' => null],
        'isManual' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => 'DTE MANUAL O SISTEMA', 'precision' => null],
        '_indexes' => [
            'fk_facturas_factura_tipos_2' => ['type' => 'index', 'columns' => ['general_maestro_persona_id'], 'length' => []],
            'fact_dte_estado_id' => ['type' => 'index', 'columns' => ['fact_dte_estado_id'], 'length' => []],
            'general_maestro_cliente_id' => ['type' => 'index', 'columns' => ['general_maestro_cliente_id'], 'length' => []],
            'fact_dtes_ibfk_3' => ['type' => 'index', 'columns' => ['fact_dte_tipo_id'], 'length' => []],
            'fact_dtes_ibfk_9' => ['type' => 'index', 'columns' => ['fact_dte_movimiento_id'], 'length' => []],
            'fact_dtes_ibfk_11' => ['type' => 'index', 'columns' => ['fact_dte_pago_id'], 'length' => []],
            'fact_dtes_ibfk_8' => ['type' => 'index', 'columns' => ['general_user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'folio_unico_contrib' => ['type' => 'unique', 'columns' => ['general_maestro_persona_id', 'folio', 'fact_dte_movimiento_id', 'general_maestro_cliente_id', 'fact_dte_tipo_id'], 'length' => []],
            'fact_dtes_ibfk_1' => ['type' => 'foreign', 'columns' => ['fact_dte_estado_id'], 'references' => ['fact_dte_estados', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fact_dtes_ibfk_3' => ['type' => 'foreign', 'columns' => ['fact_dte_pago_id'], 'references' => ['fact_dte_pagos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fact_dtes_ibfk_4' => ['type' => 'foreign', 'columns' => ['fact_dte_tipo_id'], 'references' => ['fact_dte_tipos', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fact_dtes_ibfk_5' => ['type' => 'foreign', 'columns' => ['general_maestro_persona_id'], 'references' => ['general_maestro_personas', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fact_dtes_ibfk_6' => ['type' => 'foreign', 'columns' => ['general_maestro_cliente_id'], 'references' => ['general_maestro_clientes', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fact_dtes_ibfk_7' => ['type' => 'foreign', 'columns' => ['fact_dte_movimiento_id'], 'references' => ['fact_dte_movimientos', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'fact_dtes_ibfk_8' => ['type' => 'foreign', 'columns' => ['general_user_id'], 'references' => ['general_users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'general_maestro_cliente_id' => 1,
                'general_maestro_persona_id' => 1,
                'folio' => 'Lorem ipsum d',
                'fact_dte_tipo_id' => 1,
                'fact_dte_estado_id' => 1,
                'fact_dte_movimiento_id' => 1,
                'fact_dte_pago_id' => 1,
                'fecha_pago' => '2021-02-10',
                'fecha_emision' => '2021-02-10',
                'fecha_vencimiento' => '2021-02-10',
                'abono' => 1,
                'saldo' => 1,
                'descuento' => 1,
                'monto_neto' => 1,
                'monto_exento' => 1,
                'monto_iva' => 1,
                'monto_total' => 1,
                'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'referencias' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-02-10 17:05:42',
                'fact_sii_comercial_id' => 1,
                'fecha_contrato' => '2021-02-10',
                'fecha_embarque' => '2021-02-10',
                'fecha_llegada' => '2021-02-10',
                'pais_origen' => 'Lorem ipsum dolor sit amet',
                'incoterms' => 'Lorem ipsum dolor ',
                'tipocambio' => 1,
                'fact_sii_mercaderia_id' => 1,
                'acuse_recibo' => 1,
                'recepcionado' => 1,
                'contabilizado' => 1,
                'nota_credito' => 1,
                'general_user_id' => 1,
                'dte_ref' => 1,
                'isManual' => 1
            ],
        ];
        parent::init();
    }
}
