<?php
use Migrations\AbstractMigration;

class Initial4 extends AbstractMigration
{

    public $autoId = false;

    public function up()
    {

        $this->table('fact_dte_estados')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $this->table('fact_dte_movimientos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('nombre', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $this->table('fact_dte_pagos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('fact_dte_tipo_detalles')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('fact_dte_tipo_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('codigo_sii', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
                'signed' => false,
            ])
            ->addIndex(
                [
                    'fact_dte_tipo_id',
                ]
            )
            ->create();

        $this->table('fact_dte_tipos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('codigo_SII', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $this->table('fact_dtes')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('general_maestro_cliente_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('general_maestro_persona_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('folio', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('fact_dte_tipo_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('fact_dte_estado_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('fact_dte_movimiento_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('fact_dte_pago_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('fecha_pago', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha_emision', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha_vencimiento', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('abono', 'biginteger', [
                'default' => '0',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('saldo', 'biginteger', [
                'default' => '0',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('descuento', 'biginteger', [
                'default' => '0',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('monto_neto', 'biginteger', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('monto_exento', 'biginteger', [
                'default' => '0',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('monto_iva', 'biginteger', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('monto_total', 'biginteger', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('observacion', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('referencias', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fact_sii_estado_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('fact_sii_comercial_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('fecha_contrato', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha_embarque', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha_llegada', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('pais_origen', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('incoterms', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('tipocambio', 'float', [
                'default' => '0',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fact_sii_mercaderia_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('acuse_recibo', 'tinyinteger', [
                'default' => '0',
                'limit' => 3,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('recepcionado', 'tinyinteger', [
                'default' => '0',
                'limit' => 3,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('contabilizado', 'tinyinteger', [
                'default' => '0',
                'limit' => 3,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('nota_credito', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('general_user_id', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('dte_ref', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->create();

        $this->table('fact_dte_tipo_detalles')
            ->addForeignKey(
                'fact_dte_tipo_id',
                'fact_dte_tipos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('fact_dte_tipo_detalles')
            ->dropForeignKey(
                'fact_dte_tipo_id'
            )->save();

        $this->table('fact_dte_estados')->drop()->save();
        $this->table('fact_dte_movimientos')->drop()->save();
        $this->table('fact_dte_pagos')->drop()->save();
        $this->table('fact_dte_tipo_detalles')->drop()->save();
        $this->table('fact_dte_tipos')->drop()->save();
        $this->table('fact_dtes')->drop()->save();
    }
}
