<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralUser $generalUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List General Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Cargos'), ['controller' => 'GeneralCargos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Cargo'), ['controller' => 'GeneralCargos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($generalUser) ?>
    <fieldset>
        <legend><?= __('Add General User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('telefono');
            echo $this->Form->control('status');
            echo $this->Form->control('administrador');
            echo $this->Form->control('general_cargo_id', ['options' => $generalCargos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
