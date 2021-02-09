<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaEstado $cobranzaEstado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cobranza Estados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cobranzaEstados form large-9 medium-8 columns content">
    <?= $this->Form->create($cobranzaEstado) ?>
    <fieldset>
        <legend><?= __('Add Cobranza Estado') ?></legend>
        <?php
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
