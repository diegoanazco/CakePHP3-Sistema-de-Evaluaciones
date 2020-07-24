<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Annex'), ['action' => 'edit', $annex->annexes_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Annex'), ['action' => 'delete', $annex->annexes_id], ['confirm' => __('Are you sure you want to delete # {0}?', $annex->annexes_id)]) ?> </li>
<li><?= $this->Html->link(__('List Annexes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Annex'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Annex'), ['action' => 'edit', $annex->annexes_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Annex'), ['action' => 'delete', $annex->annexes_id], ['confirm' => __('Are you sure you want to delete # {0}?', $annex->annexes_id)]) ?> </li>
<li><?= $this->Html->link(__('List Annexes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Annex'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($annex->annexes_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Test') ?></td>
            <td><?= $annex->has('test') ? $this->Html->link($annex->test->tests_id, ['controller' => 'Tests', 'action' => 'view', $annex->test->tests_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Annexes Description') ?></td>
            <td><?= h($annex->annexes_description) ?></td>
        </tr>
        <tr>
            <td><?= __('Annexes Id') ?></td>
            <td><?= $this->Number->format($annex->annexes_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($annex->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($annex->modified) ?></td>
        </tr>
    </table>
</div>

