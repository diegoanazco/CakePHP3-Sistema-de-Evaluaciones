<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->shifts_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->shifts_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->shifts_id)]) ?> </li>
<li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Shift'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->shifts_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->shifts_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->shifts_id)]) ?> </li>
<li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Shift'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($shift->shifts_description) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Shifts Description') ?></td>
            <td><?= h($shift->shifts_description) ?></td>
        </tr>
        <tr>
            <td><?= __('Shifts Id') ?></td>
            <td><?= $this->Number->format($shift->shifts_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($shift->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($shift->modified) ?></td>
        </tr>
    </table>
</div>

