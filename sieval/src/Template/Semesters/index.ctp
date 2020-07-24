<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Semester'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List StudyPlans'), ['controller' => 'StudyPlans', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Study Plan'), ['controller' => 'StudyPlans', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('semesters_id'); ?></th>
            <th><?= $this->Paginator->sort('study_plans_id'); ?></th>
            <th><?= $this->Paginator->sort('semesters_number'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semesters as $semester): ?>
        <tr>
            <td><?= $this->Number->format($semester->semesters_id) ?></td>
            <td>
                <?= $semester->has('study_plan') ? $this->Html->link($semester->study_plan->study_plans_year, ['controller' => 'StudyPlans', 'action' => 'view', $semester->study_plan->study_plans_id]) : '' ?>
            </td>
            <td><?= h($semester->semesters_number) ?></td>
            <td><?= h($semester->created) ?></td>
            <td><?= h($semester->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $semester->semesters_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $semester->semesters_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $semester->semesters_id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->semesters_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
