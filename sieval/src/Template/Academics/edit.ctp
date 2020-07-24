<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academic $academic
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $academic->academics_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $academic->academics_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Academics'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $academic->academics_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $academic->academics_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Academics'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($academic); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Academic']) ?></legend>
    <?php
    echo $this->Form->control('coordinators_id', ['options' => $coordinators]);
    echo $this->Form->control('schools_id', ['options' => $schools]);
    echo $this->Form->control('academics_year');
    echo $this->Form->control('academics_period');
    echo $this->Form->control('academics_start');
    echo $this->Form->control('academics_end');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
