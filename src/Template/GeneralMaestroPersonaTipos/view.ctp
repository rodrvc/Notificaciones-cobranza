<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroPersonaTipo $generalMaestroPersonaTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Maestro Persona Tipo'), ['action' => 'edit', $generalMaestroPersonaTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Maestro Persona Tipo'), ['action' => 'delete', $generalMaestroPersonaTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroPersonaTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Persona Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona Tipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalMaestroPersonaTipos view large-9 medium-8 columns content">
    <h3><?= h($generalMaestroPersonaTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($generalMaestroPersonaTipo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalMaestroPersonaTipo->id) ?></td>
        </tr>
    </table>
</div>
