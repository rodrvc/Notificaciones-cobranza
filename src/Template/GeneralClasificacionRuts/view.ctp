<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralClasificacionRut $generalClasificacionRut
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Clasificacion Rut'), ['action' => 'edit', $generalClasificacionRut->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Clasificacion Rut'), ['action' => 'delete', $generalClasificacionRut->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRut->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Clasificacion Ruts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalClasificacionRuts view large-9 medium-8 columns content">
    <h3><?= h($generalClasificacionRut->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($generalClasificacionRut->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalClasificacionRut->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related General Clasificacion Rut Maestro Personas') ?></h4>
        <?php if (!empty($generalClasificacionRut->general_clasificacion_rut_maestro_personas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('General Maestro Persona Id') ?></th>
                <th scope="col"><?= __('General Maestro Cliente Id') ?></th>
                <th scope="col"><?= __('General Clasificacion Rut Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Plazo Venta') ?></th>
                <th scope="col"><?= __('Plazo Compra') ?></th>
                <th scope="col"><?= __('Medio Pago Venta Id') ?></th>
                <th scope="col"><?= __('Medio Pago Compra Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generalClasificacionRut->general_clasificacion_rut_maestro_personas as $generalClasificacionRutMaestroPersonas): ?>
            <tr>
                <td><?= h($generalClasificacionRutMaestroPersonas->id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->general_maestro_persona_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->general_maestro_cliente_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->general_clasificacion_rut_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->estado) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->plazo_venta) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->plazo_compra) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->medio_pago_venta_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->medio_pago_compra_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'view', $generalClasificacionRutMaestroPersonas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'edit', $generalClasificacionRutMaestroPersonas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'delete', $generalClasificacionRutMaestroPersonas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRutMaestroPersonas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
