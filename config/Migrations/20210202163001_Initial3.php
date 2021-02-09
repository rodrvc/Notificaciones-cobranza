<?php
use Migrations\AbstractMigration;

class Initial3 extends AbstractMigration
{

    public $autoId = false;

    public function up()
    {

        $this->table('fact_dte_estados')
            ->addColumn('id', 'integer', [
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

        $this->table('fact_dte_pagos')
            ->addColumn('id', 'integer', [
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
                'default' => null,
                'limit' => 200,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('fact_dte_tipo_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
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
        $this->table('fact_dte_pagos')->drop()->save();
        $this->table('fact_dte_tipo_detalles')->drop()->save();
        $this->table('fact_dte_tipos')->drop()->save();
    }
}
