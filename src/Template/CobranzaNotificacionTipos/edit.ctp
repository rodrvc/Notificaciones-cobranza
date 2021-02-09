<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionTipo $cobranzaNotificacionTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cobranzaNotificacionTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cobranzaNotificacionTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($cobranzaNotificacionTipo) ?>
    <fieldset>
        <legend><?= __('Edit Cobranza Notificacion Tipo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
