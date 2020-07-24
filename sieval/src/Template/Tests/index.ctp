<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Test'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Assignments'), ['controller' => 'Assignments', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignments', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List TypesTest'), ['controller' => 'TypesTest', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Types Test'), ['controller' => 'TypesTest', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('tests_id'); ?></th>
            <th><?= $this->Paginator->sort('assignment_id'); ?></th>
            <th><?= $this->Paginator->sort('types_test_id'); ?></th>
            <th><?= $this->Paginator->sort('semesters_id'); ?></th>
            <th><?= $this->Paginator->sort('schools_id'); ?></th>
            <th><?= $this->Paginator->sort('test_date'); ?></th>
            <th><?= $this->Paginator->sort('tests_start'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tests as $test): ?>
        <tr>
            <td><?= $this->Number->format($test->tests_id) ?></td>
            <td>
                <?= $test->has('assignment') ? $this->Html->link($test->assignment->assignment_id, ['controller' => 'Assignments', 'action' => 'view', $test->assignment->assignment_id]) : '' ?>
            </td>
            <td>
                <?= $test->has('types_test') ? $this->Html->link($test->types_test->types_test_description, ['controller' => 'TypesTest', 'action' => 'view', $test->types_test->types_test_id]) : '' ?>
            </td>
            <td>
                <?= $test->has('semester') ? $this->Html->link($test->semester->semesters_number, ['controller' => 'Semesters', 'action' => 'view', $test->semester->semesters_id]) : '' ?>
            </td>
            <td>
                <?= $test->has('school') ? $this->Html->link($test->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $test->school->schools_id]) : '' ?>
            </td>
            <td><?= h($test->test_date) ?></td>
            <td><?= h($test->tests_start) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $test->tests_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $test->tests_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $test->tests_id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->tests_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
