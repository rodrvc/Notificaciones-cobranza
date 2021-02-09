<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroPersonaTipo $generalMaestroPersonaTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List General Maestro Persona Tipos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="generalMaestroPersonaTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($generalMaestroPersonaTipo) ?>
    <fieldset>
        <legend><?= __('Add General Maestro Persona Tipo') ?></legend>
        <?php
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
