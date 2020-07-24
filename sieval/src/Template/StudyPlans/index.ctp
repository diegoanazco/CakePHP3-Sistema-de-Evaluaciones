<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Study Plan'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('study_plans_id'); ?></th>
            <th><?= $this->Paginator->sort('schools_id'); ?></th>
            <th><?= $this->Paginator->sort('study_plans_year'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($studyPlans as $studyPlan): ?>
        <tr>
            <td><?= $this->Number->format($studyPlan->study_plans_id) ?></td>
            <td>
                <?= $studyPlan->has('school') ? $this->Html->link($studyPlan->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $studyPlan->school->schools_id]) : '' ?>
            </td>
            <td><?= h($studyPlan->study_plans_year) ?></td>
            <td><?= h($studyPlan->created) ?></td>
            <td><?= h($studyPlan->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $studyPlan->study_plans_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $studyPlan->study_plans_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $studyPlan->study_plans_id], ['confirm' => __('Are you sure you want to delete # {0}?', $studyPlan->study_plans_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
