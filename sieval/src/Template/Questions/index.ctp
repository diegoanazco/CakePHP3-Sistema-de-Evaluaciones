<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Question'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('questions_id'); ?></th>
            <th><?= $this->Paginator->sort('tests_id'); ?></th>
            <th><?= $this->Paginator->sort('questions_score'); ?></th>
            <th><?= $this->Paginator->sort('questions_header'); ?></th>
            <th><?= $this->Paginator->sort('questions_photo'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($questions as $question): ?>
        <tr>
            <td><?= $this->Number->format($question->questions_id) ?></td>
            <td>
                <?= $question->has('test') ? $this->Html->link($question->test->tests_id, ['controller' => 'Tests', 'action' => 'view', $question->test->tests_id]) : '' ?>
            </td>
            <td><?= $this->Number->format($question->questions_score) ?></td>
            <td><?= h($question->questions_header) ?></td>
	    <td><?= $this->Html->link("http://192.168.19.216/~danazcob/sieval/" . h($question->questions_photo))?></td>	
            <td><?= h($question->created) ?></td>
            <td><?= h($question->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $question->questions_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $question->questions_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $question->questions_id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->questions_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
