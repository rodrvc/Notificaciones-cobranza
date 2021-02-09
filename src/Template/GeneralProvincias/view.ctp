<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralProvincia $generalProvincia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Provincia'), ['action' => 'edit', $generalProvincia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Provincia'), ['action' => 'delete', $generalProvincia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalProvincia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Provincias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Provincia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalProvincias view large-9 medium-8 columns content">
    <h3><?= h($generalProvincia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($generalProvincia->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalProvincia->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related General Maestro Personas') ?></h4>
        <?php if (!empty($generalProvincia->general_maestro_personas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('General Persona Tipo Id') ?></th>
                <th scope="col"><?= __('General Regione Id') ?></th>
                <th scope="col"><?= __('General Provincia Id') ?></th>
                <th scope="col"><?= __('General Comuna Id') ?></th>
                <th scope="col"><?= __('Rut') ?></th>
                <th scope="col"><?= __('Dv') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido Paterno') ?></th>
                <th scope="col"><?= __('Apellido Materno') ?></th>
                <th scope="col"><?= __('Razon Social') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Nombre Fantasia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generalProvincia->general_maestro_personas as $generalMaestroPersonas): ?>
            <tr>
                <td><?= h($generalMaestroPersonas->id) ?></td>
                <td><?= h($generalMaestroPersonas->general_persona_tipo_id) ?></td>
                <td><?= h($generalMaestroPersonas->general_regione_id) ?></td>
                <td><?= h($generalMaestroPersonas->general_provincia_id) ?></td>
                <td><?= h($generalMaestroPersonas->general_comuna_id) ?></td>
                <td><?= h($generalMaestroPersonas->rut) ?></td>
                <td><?= h($generalMaestroPersonas->dv) ?></td>
                <td><?= h($generalMaestroPersonas->nombre) ?></td>
                <td><?= h($generalMaestroPersonas->apellido_paterno) ?></td>
                <td><?= h($generalMaestroPersonas->apellido_materno) ?></td>
                <td><?= h($generalMaestroPersonas->razon_social) ?></td>
                <td><?= h($generalMaestroPersonas->telefono) ?></td>
                <td><?= h($generalMaestroPersonas->email) ?></td>
                <td><?= h($generalMaestroPersonas->direccion) ?></td>
                <td><?= h($generalMaestroPersonas->referencia) ?></td>
                <td><?= h($generalMaestroPersonas->nombre_fantasia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $generalMaestroPersonas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'edit', $generalMaestroPersonas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'delete', $generalMaestroPersonas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroPersonas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
