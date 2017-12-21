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
                    <h2><b><?= $this->Html->link(__('ADMIN'), ['controller'=>'admin','action' => 'index']) ?></b></h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><?= $this->Html->link(__('Home'), ['controller'=>'admin','action' => 'index']) ?></li>
                    
                        <li><?= $this->Html->link(__('Visit Site'), ['controller'=>'pages','action' => 'display']); ?></li>
                        <li><?= $this->Html->link(__('Logout'), ['controller'=>'users','action' => 'logout']); ?></li>
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


<div class="container form-control">
   <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
   
    <?= $this->Form->create($experience) ?>
    <fieldset>
        <legend><?= __('Edit Experience') ?></legend>
        <?php
            echo $this->Form->control(('company'), ['class' => 'form-control']);
            echo $this->Form->control(('exp_duration'), ['class' => 'form-control']);
            echo $this->Form->control(('exp_description'), ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('UPDATE'), ['class' => 'btn btn-default btn-primary pull-right']) ?>
    <?= $this->Form->end() ?>
</div>
