<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pony $pony
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pony'), ['action' => 'edit', $pony->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pony'), ['action' => 'delete', $pony->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pony->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ponies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pony'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ponies view large-9 medium-8 columns content">
    <h3><?= h($pony->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pony->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pony->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pony->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pony->modified) ?></td>
        </tr>
    </table>
</div>
