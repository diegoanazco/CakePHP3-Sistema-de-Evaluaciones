<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->questions_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->questions_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->questions_id)]) ?> </li>
<li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->questions_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->questions_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->questions_id)]) ?> </li>
<li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($question->questions_header) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Test') ?></td>
            <td><?= $question->has('test') ? $this->Html->link($question->test->tests_id, ['controller' => 'Tests', 'action' => 'view', $question->test->tests_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Questions Header') ?></td>
            <td><?= h($question->questions_header) ?></td>
        </tr>
        <tr>
            <td><?= __('Questions Photo') ?></td>
            <td><?= h($question->questions_photo) ?></td>
        </tr>
        <tr>
            <td><?= __('Questions Id') ?></td>
            <td><?= $this->Number->format($question->questions_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Questions Score') ?></td>
            <td><?= $this->Number->format($question->questions_score) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($question->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($question->modified) ?></td>
        </tr>
    </table>
</div>

