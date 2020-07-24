<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dean $dean
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $dean->deans_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $dean->deans_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Deans'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $dean->deans_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $dean->deans_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Deans'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($dean); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Dean']) ?></legend>
    <?php
    echo $this->Form->control('users_id', ['options' => $users]);
    echo $this->Form->control('faculties_id', ['options' => $faculties]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
