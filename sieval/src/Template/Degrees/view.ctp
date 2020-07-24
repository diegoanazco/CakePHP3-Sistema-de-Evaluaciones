<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Degree'), ['action' => 'edit', $degree->degrees_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Degree'), ['action' => 'delete', $degree->degrees_id], ['confirm' => __('Are you sure you want to delete # {0}?', $degree->degrees_id)]) ?> </li>
<li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Degree'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Degree'), ['action' => 'edit', $degree->degrees_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Degree'), ['action' => 'delete', $degree->degrees_id], ['confirm' => __('Are you sure you want to delete # {0}?', $degree->degrees_id)]) ?> </li>
<li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Degree'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($degree->degrees_description) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Degrees Description') ?></td>
            <td><?= h($degree->degrees_description) ?></td>
        </tr>
        <tr>
            <td><?= __('Degrees Acronym') ?></td>
            <td><?= h($degree->degrees_acronym) ?></td>
        </tr>
        <tr>
            <td><?= __('Degrees Id') ?></td>
            <td><?= $this->Number->format($degree->degrees_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($degree->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($degree->modified) ?></td>
        </tr>
    </table>
</div>

