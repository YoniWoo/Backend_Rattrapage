<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rider $rider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rider'), ['action' => 'edit', $rider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rider'), ['action' => 'delete', $rider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Riders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rider'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponies'), ['controller' => 'Ponies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pony'), ['controller' => 'Ponies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="riders view large-9 medium-8 columns content">
    <h3><?= h($rider->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pony') ?></th>
            <td><?= $rider->has('pony') ? $this->Html->link($rider->pony->name, ['controller' => 'Ponies', 'action' => 'view', $rider->pony->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($rider->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rider->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rider->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rider->modified) ?></td>
        </tr>
    </table>
</div>
