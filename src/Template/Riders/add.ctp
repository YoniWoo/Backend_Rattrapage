<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rider $rider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Riders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ponies'), ['controller' => 'Ponies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pony'), ['controller' => 'Ponies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riders form large-9 medium-8 columns content">
    <?= $this->Form->create($rider) ?>
    <fieldset>
        <legend><?= __('Add Rider') ?></legend>
        <?php
            echo $this->Form->control('ponies_id', ['options' => $ponies]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
