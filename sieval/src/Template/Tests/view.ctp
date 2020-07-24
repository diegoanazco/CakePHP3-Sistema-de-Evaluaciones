<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->tests_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->tests_id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->tests_id)]) ?> </li>
<li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Assignments'), ['controller' => 'Assignments', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignments', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Types Test'), ['controller' => 'TypesTest', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Test'), ['controller' => 'TypesTest', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->tests_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->tests_id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->tests_id)]) ?> </li>
<li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Assignments'), ['controller' => 'Assignments', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignments', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Types Test'), ['controller' => 'TypesTest', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Test'), ['controller' => 'TypesTest', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($test->tests_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Assignment') ?></td>
            <td><?= $test->has('assignment') ? $this->Html->link($test->assignment->assignment_id, ['controller' => 'Assignments', 'action' => 'view', $test->assignment->assignment_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Types Test') ?></td>
            <td><?= $test->has('types_test') ? $this->Html->link($test->types_test->types_test_description, ['controller' => 'TypesTest', 'action' => 'view', $test->types_test->types_test_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Semester') ?></td>
            <td><?= $test->has('semester') ? $this->Html->link($test->semester->semesters_number, ['controller' => 'Semesters', 'action' => 'view', $test->semester->semesters_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('School') ?></td>
            <td><?= $test->has('school') ? $this->Html->link($test->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $test->school->schools_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Tests Id') ?></td>
            <td><?= $this->Number->format($test->tests_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Test Date') ?></td>
            <td><?= h($test->test_date) ?></td>
        </tr>
        <tr>
            <td><?= __('Tests Start') ?></td>
            <td><?= h($test->tests_start) ?></td>
        </tr>
        <tr>
            <td><?= __('Tests End') ?></td>
            <td><?= h($test->tests_end) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($test->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($test->modified) ?></td>
        </tr>
    </table>
</div>

