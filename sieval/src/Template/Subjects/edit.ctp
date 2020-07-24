<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $subject->subjects_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subjects_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Types Subjects'), ['controller' => 'TypesSubjects', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Types Subject'), ['controller' => 'TypesSubjects', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $subject->subjects_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subjects_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Types Subjects'), ['controller' => 'TypesSubjects', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Types Subject'), ['controller' => 'TypesSubjects', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($subject); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Subject']) ?></legend>
    <?php
    echo $this->Form->control('semesters_id', ['options' => $semesters]);
    echo $this->Form->control('types_subjects_id', ['options' => $typesSubjects]);
    echo $this->Form->control('subjects_name');
    echo $this->Form->control('subjects_credit');
    echo $this->Form->control('subjects_hours');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
