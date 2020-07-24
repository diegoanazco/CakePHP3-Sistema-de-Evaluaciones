<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Types Test'), ['action' => 'edit', $typesTest->types_test_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Types Test'), ['action' => 'delete', $typesTest->types_test_id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesTest->types_test_id)]) ?> </li>
<li><?= $this->Html->link(__('List Types Test'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Test'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Types Test'), ['action' => 'edit', $typesTest->types_test_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Types Test'), ['action' => 'delete', $typesTest->types_test_id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesTest->types_test_id)]) ?> </li>
<li><?= $this->Html->link(__('List Types Test'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Test'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($typesTest->types_test_description) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Types Test Description') ?></td>
            <td><?= h($typesTest->types_test_description) ?></td>
        </tr>
        <tr>
            <td><?= __('Types Test Id') ?></td>
            <td><?= $this->Number->format($typesTest->types_test_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Types Test Weight') ?></td>
            <td><?= $this->Number->format($typesTest->types_test_weight) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($typesTest->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($typesTest->modified) ?></td>
        </tr>
    </table>
</div>

