<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('fact_dte_movimientos', ['id' => false])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,    
            ])
            ->create();
    }

    public function down()
    {
        $this->table('fact_dte_movimientos')->drop()->save();
    }
}
