<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Section'), ['action' => 'edit', $section->sections_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Section'), ['action' => 'delete', $section->sections_id], ['confirm' => __('Are you sure you want to delete # {0}?', $section->sections_id)]) ?> </li>
<li><?= $this->Html->link(__('List Sections'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Section'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Section'), ['action' => 'edit', $section->sections_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Section'), ['action' => 'delete', $section->sections_id], ['confirm' => __('Are you sure you want to delete # {0}?', $section->sections_id)]) ?> </li>
<li><?= $this->Html->link(__('List Sections'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Section'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($section->sections_groups) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Sections Groups') ?></td>
            <td><?= h($section->sections_groups) ?></td>
        </tr>
        <tr>
            <td><?= __('Sections Id') ?></td>
            <td><?= $this->Number->format($section->sections_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($section->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($section->modified) ?></td>
        </tr>
    </table>
</div>

