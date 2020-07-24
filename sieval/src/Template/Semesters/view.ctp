<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Semester'), ['action' => 'edit', $semester->semesters_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Semester'), ['action' => 'delete', $semester->semesters_id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->semesters_id)]) ?> </li>
<li><?= $this->Html->link(__('List Semesters'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Semester'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Study Plans'), ['controller' => 'StudyPlans', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Study Plan'), ['controller' => 'StudyPlans', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Semester'), ['action' => 'edit', $semester->semesters_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Semester'), ['action' => 'delete', $semester->semesters_id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->semesters_id)]) ?> </li>
<li><?= $this->Html->link(__('List Semesters'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Semester'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Study Plans'), ['controller' => 'StudyPlans', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Study Plan'), ['controller' => 'StudyPlans', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($semester->semesters_number) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Study Plan') ?></td>
            <td><?= $semester->has('study_plan') ? $this->Html->link($semester->study_plan->study_plans_year, ['controller' => 'StudyPlans', 'action' => 'view', $semester->study_plan->study_plans_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Semesters Number') ?></td>
            <td><?= h($semester->semesters_number) ?></td>
        </tr>
        <tr>
            <td><?= __('Semesters Id') ?></td>
            <td><?= $this->Number->format($semester->semesters_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($semester->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($semester->modified) ?></td>
        </tr>
    </table>
</div>

