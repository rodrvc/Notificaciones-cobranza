<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDte $factDte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factDte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factDte->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['controller' => 'FactDteTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo'), ['controller' => 'FactDteTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Estados'), ['controller' => 'FactDteEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Estado'), ['controller' => 'FactDteEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Movimientos'), ['controller' => 'FactDteMovimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Movimiento'), ['controller' => 'FactDteMovimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Pagos'), ['controller' => 'FactDtePagos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Pago'), ['controller' => 'FactDtePagos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDtes form large-9 medium-8 columns content">
    <?= $this->Form->create($factDte) ?>
    <fieldset>
        <legend><?= __('Edit Fact Dte') ?></legend>
        <?php
            echo $this->Form->control('general_maestro_cliente_id', ['options' => $generalMaestroClientes, 'empty' => true]);
            echo $this->Form->control('general_maestro_persona_id', ['options' => $generalMaestroPersonas]);
            echo $this->Form->control('folio');
            echo $this->Form->control('fact_dte_tipo_id', ['options' => $factDteTipos, 'empty' => true]);
            echo $this->Form->control('fact_dte_estado_id', ['options' => $factDteEstados, 'empty' => true]);
            echo $this->Form->control('fact_dte_movimiento_id', ['options' => $factDteMovimientos, 'empty' => true]);
            echo $this->Form->control('fact_dte_pago_id', ['options' => $factDtePagos, 'empty' => true]);
            echo $this->Form->control('fecha_pago', ['empty' => true]);
            echo $this->Form->control('fecha_emision', ['empty' => true]);
            echo $this->Form->control('fecha_vencimiento', ['empty' => true]);
            echo $this->Form->control('abono');
            echo $this->Form->control('saldo');
            echo $this->Form->control('descuento');
            echo $this->Form->control('monto_neto');
            echo $this->Form->control('monto_exento');
            echo $this->Form->control('monto_iva');
            echo $this->Form->control('monto_total');
            echo $this->Form->control('observacion');
            echo $this->Form->control('referencias');
            echo $this->Form->control('fact_sii_comercial_id');
            echo $this->Form->control('fecha_contrato', ['empty' => true]);
            echo $this->Form->control('fecha_embarque', ['empty' => true]);
            echo $this->Form->control('fecha_llegada', ['empty' => true]);
            echo $this->Form->control('pais_origen');
            echo $this->Form->control('incoterms');
            echo $this->Form->control('tipocambio');
            echo $this->Form->control('fact_sii_mercaderia_id');
            echo $this->Form->control('acuse_recibo');
            echo $this->Form->control('recepcionado');
            echo $this->Form->control('contabilizado');
            echo $this->Form->control('nota_credito');
            echo $this->Form->control('general_user_id', ['options' => $generalUsers, 'empty' => true]);
            echo $this->Form->control('dte_ref');
            echo $this->Form->control('isManual');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
