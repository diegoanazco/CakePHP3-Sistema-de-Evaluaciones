<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Types Test'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('types_test_id'); ?></th>
            <th><?= $this->Paginator->sort('types_test_description'); ?></th>
            <th><?= $this->Paginator->sort('types_test_weight'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($typesTest as $typesTest): ?>
        <tr>
            <td><?= $this->Number->format($typesTest->types_test_id) ?></td>
            <td><?= h($typesTest->types_test_description) ?></td>
            <td><?= $this->Number->format($typesTest->types_test_weight) ?></td>
            <td><?= h($typesTest->created) ?></td>
            <td><?= h($typesTest->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $typesTest->types_test_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $typesTest->types_test_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $typesTest->types_test_id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesTest->types_test_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
