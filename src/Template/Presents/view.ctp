<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Present $present
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Present'), ['action' => 'edit', $present->eventsid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Present'), ['action' => 'delete', $present->eventsid], ['confirm' => __('Are you sure you want to delete # {0}?', $present->eventsid)]) ?> </li>
        <li><?= $this->Html->link(__('List Presents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Present'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="presents view large-9 medium-8 columns content">
    <h3><?= h($present->eventsid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Eventsid') ?></th>
            <td><?= $this->Number->format($present->eventsid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poniesid') ?></th>
            <td><?= $this->Number->format($present->poniesid) ?></td>
        </tr>
    </table>
</div>
