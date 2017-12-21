<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admin'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="admin form large-9 medium-8 columns content">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Add Admin') ?></legend>
        <?php
            echo $this->Form->control('logotext');
            echo $this->Form->control('name');
            echo $this->Form->control('quote');
            echo $this->Form->control('about_heading');
            echo $this->Form->control('first_paragraph');
            echo $this->Form->control('second_paragraph');
            echo $this->Form->control('image');
            echo $this->Form->control('address');
            echo $this->Form->control('phone1');
            echo $this->Form->control('phone2');
            echo $this->Form->control('email');
            echo $this->Form->control('website');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
