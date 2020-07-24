<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Degree $degree
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $degree->degrees_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $degree->degrees_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $degree->degrees_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $degree->degrees_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($degree); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Degree']) ?></legend>
    <?php
    echo $this->Form->control('degrees_description');
    echo $this->Form->control('degrees_acronym');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
