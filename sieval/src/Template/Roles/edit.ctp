<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $role->roles_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $role->roles_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $role->roles_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $role->roles_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($role); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Role']) ?></legend>
    <?php
    echo $this->Form->control('roles_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
