<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->users_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->users_id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->users_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->users_id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($user->Array) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Role') ?></td>
            <td><?= $user->has('role') ? $this->Html->link($user->role->roles_description, ['controller' => 'Roles', 'action' => 'view', $user->role->roles_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Degree') ?></td>
            <td><?= $user->has('degree') ? $this->Html->link($user->degree->degrees_description, ['controller' => 'Degrees', 'action' => 'view', $user->degree->degrees_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Users Name') ?></td>
            <td><?= h($user->users_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Fathersurname') ?></td>
            <td><?= h($user->users_fathersurname) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Mothersurname') ?></td>
            <td><?= h($user->users_mothersurname) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Email') ?></td>
            <td><?= h($user->users_email) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Password') ?></td>
            <td><?= h($user->users_password) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Cellphone') ?></td>
            <td><?= h($user->users_cellphone) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Id') ?></td>
            <td><?= $this->Number->format($user->users_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Birthday') ?></td>
            <td><?= h($user->users_birthday) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Users Status') ?></td>
            <td><?= $user->users_status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

