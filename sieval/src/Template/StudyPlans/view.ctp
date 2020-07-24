<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Study Plan'), ['action' => 'edit', $studyPlan->study_plans_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Study Plan'), ['action' => 'delete', $studyPlan->study_plans_id], ['confirm' => __('Are you sure you want to delete # {0}?', $studyPlan->study_plans_id)]) ?> </li>
<li><?= $this->Html->link(__('List Study Plans'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Study Plan'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Study Plan'), ['action' => 'edit', $studyPlan->study_plans_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Study Plan'), ['action' => 'delete', $studyPlan->study_plans_id], ['confirm' => __('Are you sure you want to delete # {0}?', $studyPlan->study_plans_id)]) ?> </li>
<li><?= $this->Html->link(__('List Study Plans'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Study Plan'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($studyPlan->study_plans_year) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('School') ?></td>
            <td><?= $studyPlan->has('school') ? $this->Html->link($studyPlan->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $studyPlan->school->schools_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Study Plans Year') ?></td>
            <td><?= h($studyPlan->study_plans_year) ?></td>
        </tr>
        <tr>
            <td><?= __('Study Plans Id') ?></td>
            <td><?= $this->Number->format($studyPlan->study_plans_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($studyPlan->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($studyPlan->modified) ?></td>
        </tr>
    </table>
</div>

