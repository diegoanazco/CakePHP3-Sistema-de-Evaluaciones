<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Assignment'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Academics'), ['controller' => 'Academics', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Academic'), ['controller' => 'Academics', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('assignment_id'); ?></th>
            <th><?= $this->Paginator->sort('academics_id'); ?></th>
            <th><?= $this->Paginator->sort('subjects_id'); ?></th>
            <th><?= $this->Paginator->sort('teachers_id'); ?></th>
            <th><?= $this->Paginator->sort('shifts_id'); ?></th>
            <th><?= $this->Paginator->sort('sections_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($assignments as $assignment): ?>
        <tr>
            <td><?= $this->Number->format($assignment->assignment_id) ?></td>
            <td>
                <?= $assignment->has('academic') ? $this->Html->link($assignment->academic->Array, ['controller' => 'Academics', 'action' => 'view', $assignment->academic->academics_id]) : '' ?>
            </td>
            <td>
                <?= $assignment->has('subject') ? $this->Html->link($assignment->subject->subjects_name, ['controller' => 'Subjects', 'action' => 'view', $assignment->subject->subjects_id]) : '' ?>
            </td>
            <td>
                <?= $assignment->has('teacher') ? $this->Html->link($assignment->teacher->teachers_id, ['controller' => 'Teachers', 'action' => 'view', $assignment->teacher->teachers_id]) : '' ?>
            </td>
            <td>
                <?= $assignment->has('shift') ? $this->Html->link($assignment->shift->shifts_description, ['controller' => 'Shifts', 'action' => 'view', $assignment->shift->shifts_id]) : '' ?>
            </td>
            <td>
                <?= $assignment->has('section') ? $this->Html->link($assignment->section->sections_groups, ['controller' => 'Sections', 'action' => 'view', $assignment->section->sections_id]) : '' ?>
            </td>
            <td><?= h($assignment->created) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $assignment->assignment_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $assignment->assignment_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $assignment->assignment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->assignment_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
