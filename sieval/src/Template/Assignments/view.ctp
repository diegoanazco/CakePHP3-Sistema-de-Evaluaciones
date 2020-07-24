<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Assignment'), ['action' => 'edit', $assignment->assignment_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Assignment'), ['action' => 'delete', $assignment->assignment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->assignment_id)]) ?> </li>
<li><?= $this->Html->link(__('List Assignments'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Assignment'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Academics'), ['controller' => 'Academics', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Academic'), ['controller' => 'Academics', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Assignment'), ['action' => 'edit', $assignment->assignment_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Assignment'), ['action' => 'delete', $assignment->assignment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->assignment_id)]) ?> </li>
<li><?= $this->Html->link(__('List Assignments'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Assignment'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Academics'), ['controller' => 'Academics', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Academic'), ['controller' => 'Academics', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($assignment->assignment_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Academic') ?></td>
            <td><?= $assignment->has('academic') ? $this->Html->link($assignment->academic->Array, ['controller' => 'Academics', 'action' => 'view', $assignment->academic->academics_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Subject') ?></td>
            <td><?= $assignment->has('subject') ? $this->Html->link($assignment->subject->subjects_name, ['controller' => 'Subjects', 'action' => 'view', $assignment->subject->subjects_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Teacher') ?></td>
            <td><?= $assignment->has('teacher') ? $this->Html->link($assignment->teacher->teachers_id, ['controller' => 'Teachers', 'action' => 'view', $assignment->teacher->teachers_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Shift') ?></td>
            <td><?= $assignment->has('shift') ? $this->Html->link($assignment->shift->shifts_description, ['controller' => 'Shifts', 'action' => 'view', $assignment->shift->shifts_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Section') ?></td>
            <td><?= $assignment->has('section') ? $this->Html->link($assignment->section->sections_groups, ['controller' => 'Sections', 'action' => 'view', $assignment->section->sections_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Assignment Id') ?></td>
            <td><?= $this->Number->format($assignment->assignment_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($assignment->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($assignment->modified) ?></td>
        </tr>
    </table>
</div>

