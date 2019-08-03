<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rider[]|\Cake\Collection\CollectionInterface $riders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rider'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponies'), ['controller' => 'Ponies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pony'), ['controller' => 'Ponies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riders index large-9 medium-8 columns content">
    <h3><?= __('Riders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ponies_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riders as $rider): ?>
            <tr>
                <td><?= $this->Number->format($rider->id) ?></td>
                <td><?= $rider->has('pony') ? $this->Html->link($rider->pony->name, ['controller' => 'Ponies', 'action' => 'view', $rider->pony->id]) : '' ?></td>
                <td><?= h($rider->created) ?></td>
                <td><?= h($rider->modified) ?></td>
                <td><?= h($rider->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rider->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rider->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rider->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
