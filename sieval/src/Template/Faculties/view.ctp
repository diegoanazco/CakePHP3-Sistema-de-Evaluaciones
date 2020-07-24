<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->faculties_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->faculties_id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->faculties_id)]) ?> </li>
<li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->faculties_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->faculties_id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->faculties_id)]) ?> </li>
<li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($faculty->faculties_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('College') ?></td>
            <td><?= $faculty->has('college') ? $this->Html->link($faculty->college->college_name, ['controller' => 'Colleges', 'action' => 'view', $faculty->college->college_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Faculties Name') ?></td>
            <td><?= h($faculty->faculties_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Faculties Id') ?></td>
            <td><?= $this->Number->format($faculty->faculties_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($faculty->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($faculty->modified) ?></td>
        </tr>
    </table>
</div>

