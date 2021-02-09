<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDtesProducto $factDtesProducto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fact Dtes Producto'), ['action' => 'edit', $factDtesProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fact Dtes Producto'), ['action' => 'delete', $factDtesProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDtesProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dtes Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dtes Producto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="factDtesProducto view large-9 medium-8 columns content">
    <h3><?= h($factDtesProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= h($factDtesProducto->producto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($factDtesProducto->id) ?></td>
        </tr>
    </table>
</div>
