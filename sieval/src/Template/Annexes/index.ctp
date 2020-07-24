<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Annex'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('annexes_id'); ?></th>
            <th><?= $this->Paginator->sort('tests_id'); ?></th>
            <th><?= $this->Paginator->sort('annexes_description'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($annexes as $annex): ?>
        <tr>
            <td><?= $this->Number->format($annex->annexes_id) ?></td>
            <td>
                <?= $annex->has('test') ? $this->Html->link($annex->test->tests_id, ['controller' => 'Tests', 'action' => 'view', $annex->test->tests_id]) : '' ?>
            </td>
            <td><?= h($annex->annexes_description) ?></td>
            <td><?= h($annex->created) ?></td>
            <td><?= h($annex->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $annex->annexes_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $annex->annexes_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $annex->annexes_id], ['confirm' => __('Are you sure you want to delete # {0}?', $annex->annexes_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
