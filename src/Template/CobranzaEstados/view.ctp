<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaEstado $cobranzaEstado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cobranza Estado'), ['action' => 'edit', $cobranzaEstado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cobranza Estado'), ['action' => 'delete', $cobranzaEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaEstado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cobranzaEstados view large-9 medium-8 columns content">
    <h3><?= h($cobranzaEstado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($cobranzaEstado->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cobranzaEstado->id) ?></td>
        </tr>
    </table>
</div>
