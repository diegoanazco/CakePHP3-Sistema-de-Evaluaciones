<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List TypesSubjects'), ['controller' => 'TypesSubjects', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Types Subject'), ['controller' => 'TypesSubjects', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('subjects_id'); ?></th>
            <th><?= $this->Paginator->sort('semesters_id'); ?></th>
            <th><?= $this->Paginator->sort('types_subjects_id'); ?></th>
            <th><?= $this->Paginator->sort('subjects_name'); ?></th>
            <th><?= $this->Paginator->sort('subjects_credit'); ?></th>
            <th><?= $this->Paginator->sort('subjects_hours'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($subjects as $subject): ?>
        <tr>
            <td><?= $this->Number->format($subject->subjects_id) ?></td>
            <td>
                <?= $subject->has('semester') ? $this->Html->link($subject->semester->semesters_number, ['controller' => 'Semesters', 'action' => 'view', $subject->semester->semesters_id]) : '' ?>
            </td>
            <td>
                <?= $subject->has('types_subject') ? $this->Html->link($subject->types_subject->types_subjects_description, ['controller' => 'TypesSubjects', 'action' => 'view', $subject->types_subject->types_subjects]) : '' ?>
            </td>
            <td><?= h($subject->subjects_name) ?></td>
            <td><?= $this->Number->format($subject->subjects_credit) ?></td>
            <td><?= $this->Number->format($subject->subjects_hours) ?></td>
            <td><?= h($subject->created) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $subject->subjects_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $subject->subjects_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $subject->subjects_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subjects_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
