<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Rector'), ['action' => 'edit', $rector->rectors_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Rector'), ['action' => 'delete', $rector->rectors_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->rectors_id)]) ?> </li>
<li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Rector'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Rector'), ['action' => 'edit', $rector->rectors_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Rector'), ['action' => 'delete', $rector->rectors_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->rectors_id)]) ?> </li>
<li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Rector'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($rector->rectors_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $rector->has('user') ? $this->Html->link($rector->user->Array, ['controller' => 'Users', 'action' => 'view', $rector->user->users_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('College') ?></td>
            <td><?= $rector->has('college') ? $this->Html->link($rector->college->college_name, ['controller' => 'Colleges', 'action' => 'view', $rector->college->college_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Rectors Id') ?></td>
            <td><?= $this->Number->format($rector->rectors_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($rector->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($rector->modified) ?></td>
        </tr>
    </table>
</div>

