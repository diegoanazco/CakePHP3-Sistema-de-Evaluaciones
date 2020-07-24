<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit College'), ['action' => 'edit', $college->college_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete College'), ['action' => 'delete', $college->college_id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->college_id)]) ?> </li>
<li><?= $this->Html->link(__('List Colleges'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New College'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit College'), ['action' => 'edit', $college->college_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete College'), ['action' => 'delete', $college->college_id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->college_id)]) ?> </li>
<li><?= $this->Html->link(__('List Colleges'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New College'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($college->college_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('College Name') ?></td>
            <td><?= h($college->college_name) ?></td>
        </tr>
        <tr>
            <td><?= __('College Address') ?></td>
            <td><?= h($college->college_address) ?></td>
        </tr>
        <tr>
            <td><?= __('College Phone') ?></td>
            <td><?= h($college->college_phone) ?></td>
        </tr>
        <tr>
            <td><?= __('College Cellphone') ?></td>
            <td><?= h($college->college_cellphone) ?></td>
        </tr>
        <tr>
            <td><?= __('College Email') ?></td>
            <td><?= h($college->college_email) ?></td>
        </tr>
        <tr>
            <td><?= __('College Id') ?></td>
            <td><?= $this->Number->format($college->college_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($college->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($college->modified) ?></td>
        </tr>
    </table>
</div>

