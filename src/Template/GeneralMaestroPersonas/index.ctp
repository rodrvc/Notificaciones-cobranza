<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroPersona[]|\Cake\Collection\CollectionInterface $generalMaestroPersonas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Persona Tipos'), ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona Tipo'), ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Regiones'), ['controller' => 'GeneralRegiones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Regione'), ['controller' => 'GeneralRegiones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Provincias'), ['controller' => 'GeneralProvincias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Provincia'), ['controller' => 'GeneralProvincias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Comunas'), ['controller' => 'GeneralComunas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Comuna'), ['controller' => 'GeneralComunas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalMaestroPersonas index large-9 medium-8 columns content">
    <h3><?= __('General Maestro Personas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_persona_tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_regione_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_provincia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_comuna_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_materno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razon_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_fantasia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalMaestroPersonas as $generalMaestroPersona): ?>
            <tr>
                <td><?= $this->Number->format($generalMaestroPersona->id) ?></td>
                <td><?= $generalMaestroPersona->has('general_maestro_persona_tipo') ? $this->Html->link($generalMaestroPersona->general_maestro_persona_tipo->id, ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'view', $generalMaestroPersona->general_maestro_persona_tipo->id]) : '' ?></td>
                <td><?= $generalMaestroPersona->has('general_regione') ? $this->Html->link($generalMaestroPersona->general_regione->id, ['controller' => 'GeneralRegiones', 'action' => 'view', $generalMaestroPersona->general_regione->id]) : '' ?></td>
                <td><?= $generalMaestroPersona->has('general_provincia') ? $this->Html->link($generalMaestroPersona->general_provincia->id, ['controller' => 'GeneralProvincias', 'action' => 'view', $generalMaestroPersona->general_provincia->id]) : '' ?></td>
                <td><?= $generalMaestroPersona->has('general_comuna') ? $this->Html->link($generalMaestroPersona->general_comuna->id, ['controller' => 'GeneralComunas', 'action' => 'view', $generalMaestroPersona->general_comuna->id]) : '' ?></td>
                <td><?= h($generalMaestroPersona->rut) ?></td>
                <td><?= h($generalMaestroPersona->dv) ?></td>
                <td><?= h($generalMaestroPersona->nombre) ?></td>
                <td><?= h($generalMaestroPersona->apellido_paterno) ?></td>
                <td><?= h($generalMaestroPersona->apellido_materno) ?></td>
                <td><?= h($generalMaestroPersona->razon_social) ?></td>
                <td><?= h($generalMaestroPersona->telefono) ?></td>
                <td><?= h($generalMaestroPersona->email) ?></td>
                <td><?= h($generalMaestroPersona->referencia) ?></td>
                <td><?= h($generalMaestroPersona->nombre_fantasia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalMaestroPersona->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalMaestroPersona->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalMaestroPersona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroPersona->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
