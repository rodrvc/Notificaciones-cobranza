<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDtesProducto $factDtesProducto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes Producto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="factDtesProducto form large-9 medium-8 columns content">
    <?= $this->Form->create($factDtesProducto) ?>
    <fieldset>
        <legend><?= __('Add Fact Dtes Producto') ?></legend>
        <?php
            echo $this->Form->control('producto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
