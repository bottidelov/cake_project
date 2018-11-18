<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dept $dept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dept'), ['action' => 'edit', $dept->dept_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dept'), ['action' => 'delete', $dept->dept_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dept->dept_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Depts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dept'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="depts view large-9 medium-8 columns content">
    <h3><?= h($dept->dept_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dept Name') ?></th>
            <td><?= h($dept->dept_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dept Id') ?></th>
            <td><?= $this->Number->format($dept->dept_id) ?></td>
        </tr>
    </table>
</div>
