<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesSubject $typesSubject
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $typesSubject->types_subjects],
        ['confirm' => __('Are you sure you want to delete # {0}?', $typesSubject->types_subjects)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Types Subjects'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $typesSubject->types_subjects],
        ['confirm' => __('Are you sure you want to delete # {0}?', $typesSubject->types_subjects)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Types Subjects'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($typesSubject); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Types Subject']) ?></legend>
    <?php
    echo $this->Form->control('types_subjects_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
