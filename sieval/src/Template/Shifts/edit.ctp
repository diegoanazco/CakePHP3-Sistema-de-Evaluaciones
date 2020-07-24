<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $shift->shifts_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $shift->shifts_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $shift->shifts_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $shift->shifts_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($shift); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Shift']) ?></legend>
    <?php
    echo $this->Form->control('shifts_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
