<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Annex $annex
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $annex->annexes_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $annex->annexes_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Annexes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $annex->annexes_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $annex->annexes_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Annexes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($annex); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Annex']) ?></legend>
    <?php
    echo $this->Form->control('tests_id', ['options' => $tests]);
    echo $this->Form->control('annexes_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
