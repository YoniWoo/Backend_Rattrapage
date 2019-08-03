<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pony $pony
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pony->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pony->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ponies'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ponies form large-9 medium-8 columns content">
    <?= $this->Form->create($pony) ?>
    <fieldset>
        <legend><?= __('Edit Pony') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
