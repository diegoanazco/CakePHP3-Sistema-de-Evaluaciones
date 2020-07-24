<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector $rector
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $rector->rectors_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $rector->rectors_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $rector->rectors_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $rector->rectors_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($rector); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Rector']) ?></legend>
    <?php
    echo $this->Form->control('users_id', ['options' => $users]);
    echo $this->Form->control('college_id', ['options' => $colleges]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
