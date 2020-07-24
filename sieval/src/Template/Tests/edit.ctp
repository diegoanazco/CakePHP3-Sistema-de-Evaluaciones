<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $test->tests_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $test->tests_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Assignments'), ['controller' => 'Assignments', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignments', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Types Test'), ['controller' => 'TypesTest', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Types Test'), ['controller' => 'TypesTest', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $test->tests_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $test->tests_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Assignments'), ['controller' => 'Assignments', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignments', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Types Test'), ['controller' => 'TypesTest', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Types Test'), ['controller' => 'TypesTest', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($test); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Test']) ?></legend>
    <?php
    echo $this->Form->control('assignment_id', ['options' => $assignments]);
    echo $this->Form->control('types_test_id', ['options' => $typesTest]);
    echo $this->Form->control('semesters_id', ['options' => $semesters]);
    echo $this->Form->control('schools_id', ['options' => $schools]);
    echo $this->Form->control('test_date');
    echo $this->Form->control('tests_start');
    echo $this->Form->control('tests_end');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
