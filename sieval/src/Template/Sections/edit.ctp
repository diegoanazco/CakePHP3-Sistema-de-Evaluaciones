<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Section $section
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $section->sections_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $section->sections_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sections'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $section->sections_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $section->sections_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sections'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($section); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Section']) ?></legend>
    <?php
    echo $this->Form->control('sections_groups');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
