<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Present[]|\Cake\Collection\CollectionInterface $presents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Present'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="presents index large-9 medium-8 columns content">
    <h3><?= __('Presents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('eventsid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poniesid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presents as $present): ?>
            <tr>
                <td><?= $this->Number->format($present->eventsid) ?></td>
                <td><?= $this->Number->format($present->poniesid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $present->eventsid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $present->eventsid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $present->eventsid], ['confirm' => __('Are you sure you want to delete # {0}?', $present->eventsid)]) ?>
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
