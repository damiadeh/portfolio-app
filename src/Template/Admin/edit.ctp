<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav class="navbar navbar-default">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2><?= $this->Html->link(__('ADMIN'), ['action' => 'index']) ?></h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
            
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><?= $this->Html->link(__('Home'), ['action' => 'index']) ?></li>
                    
                        <li><?= $this->Html->link(__('Visit Site'), ['controller'=>'pages','action' => 'display',1]); ?></li>
                        <li><?= $this->Html->link(__('Logout'), ['controller'=>'users','action' => 'logout']); ?></li>
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


<div class="container form-group">
    <?= $this->Form->create($admin, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Banner Content') ?></legend>
        <?php
            echo $this->Form->control(('logotext'), ['class' => 'form-control']);
            echo $this->Form->control(('name'), ['class' => 'form-control']);
            echo $this->Form->control(('quote'), ['class' => 'form-control']);
        ?>
    </fieldset>
    <fieldset>
        <legend><?= __('Edit About Section') ?></legend>
            <?php
            echo $this->Form->control(('about_heading'), ['class' => 'form-control']);
            echo $this->Form->control(('first_paragraph'), ['class' => 'form-control']);
            echo $this->Form->control(('second_paragraph'), ['class' => 'form-control']);
            echo $this->Form->control('image', ['type' => 'file', 'class' => 'form-control']);
            ?>
    </fieldset>
    <fieldset>
        <legend><?= __('Edit Contact Information') ?></legend>
        <?php
            echo $this->Form->control(('address'), ['class' => 'form-control']);
            echo $this->Form->control(('phone1'), ['class' => 'form-control']);
            echo $this->Form->control(('phone2'), ['class' => 'form-control']);
            echo $this->Form->control(('email'), ['class' => 'form-control']);
            echo $this->Form->control(('website'), ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('UPDATE'), ['class' => 'pull-right btn btn-default btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
