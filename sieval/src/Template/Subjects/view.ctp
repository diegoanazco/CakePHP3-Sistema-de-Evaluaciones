<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->subjects_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->subjects_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subjects_id)]) ?> </li>
<li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Types Subjects'), ['controller' => 'TypesSubjects', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Subject'), ['controller' => 'TypesSubjects', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->subjects_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->subjects_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subjects_id)]) ?> </li>
<li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Types Subjects'), ['controller' => 'TypesSubjects', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Subject'), ['controller' => 'TypesSubjects', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($subject->subjects_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Semester') ?></td>
            <td><?= $subject->has('semester') ? $this->Html->link($subject->semester->semesters_number, ['controller' => 'Semesters', 'action' => 'view', $subject->semester->semesters_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Types Subject') ?></td>
            <td><?= $subject->has('types_subject') ? $this->Html->link($subject->types_subject->types_subjects_description, ['controller' => 'TypesSubjects', 'action' => 'view', $subject->types_subject->types_subjects]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Subjects Name') ?></td>
            <td><?= h($subject->subjects_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Subjects Id') ?></td>
            <td><?= $this->Number->format($subject->subjects_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Subjects Credit') ?></td>
            <td><?= $this->Number->format($subject->subjects_credit) ?></td>
        </tr>
        <tr>
            <td><?= __('Subjects Hours') ?></td>
            <td><?= $this->Number->format($subject->subjects_hours) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($subject->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($subject->modified) ?></td>
        </tr>
    </table>
</div>

