<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Types Subject'), ['action' => 'edit', $typesSubject->types_subjects]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Types Subject'), ['action' => 'delete', $typesSubject->types_subjects], ['confirm' => __('Are you sure you want to delete # {0}?', $typesSubject->types_subjects)]) ?> </li>
<li><?= $this->Html->link(__('List Types Subjects'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Subject'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Types Subject'), ['action' => 'edit', $typesSubject->types_subjects]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Types Subject'), ['action' => 'delete', $typesSubject->types_subjects], ['confirm' => __('Are you sure you want to delete # {0}?', $typesSubject->types_subjects)]) ?> </li>
<li><?= $this->Html->link(__('List Types Subjects'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Types Subject'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($typesSubject->types_subjects_description) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Types Subjects Description') ?></td>
            <td><?= h($typesSubject->types_subjects_description) ?></td>
        </tr>
        <tr>
            <td><?= __('Types Subjects') ?></td>
            <td><?= $this->Number->format($typesSubject->types_subjects) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($typesSubject->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($typesSubject->modified) ?></td>
        </tr>
    </table>
</div>

