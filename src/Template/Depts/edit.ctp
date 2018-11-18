<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dept $dept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dept->dept_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dept->dept_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Depts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="depts form large-9 medium-8 columns content">
    <?= $this->Form->create($dept) ?>
    <fieldset>
        <legend><?= __('Edit Dept') ?></legend>
        <?php
            echo $this->Form->control('dept_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
