<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroCliente[]|\Cake\Collection\CollectionInterface $generalMaestroClientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalMaestroClientes index large-9 medium-8 columns content">
    <h3><?= __('General Maestro Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_maestro_persona_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actividad_economica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('octava_username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('octava_password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('octava_apipass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefijo_oc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalMaestroClientes as $generalMaestroCliente): ?>
            <tr>
                <td><?= $this->Number->format($generalMaestroCliente->id) ?></td>
                <td><?= $generalMaestroCliente->has('general_maestro_persona') ? $this->Html->link($generalMaestroCliente->general_maestro_persona->id, ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $generalMaestroCliente->general_maestro_persona->id]) : '' ?></td>
                <td><?= h($generalMaestroCliente->nombre) ?></td>
                <td><?= h($generalMaestroCliente->logo) ?></td>
                <td><?= h($generalMaestroCliente->actividad_economica) ?></td>
                <td><?= h($generalMaestroCliente->octava_username) ?></td>
                <td><?= h($generalMaestroCliente->octava_password) ?></td>
                <td><?= h($generalMaestroCliente->octava_apipass) ?></td>
                <td><?= h($generalMaestroCliente->prefijo_oc) ?></td>
                <td><?= h($generalMaestroCliente->activa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalMaestroCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalMaestroCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalMaestroCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroCliente->id)]) ?>
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
