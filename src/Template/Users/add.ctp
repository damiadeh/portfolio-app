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


<div class="container form-group">
   <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add Admin') ?></legend>
        <?php
            echo $this->Form->control(('firstname'), ['class' => 'form-control', 'placeholder' => 'ENner Your First Name']);
            echo $this->Form->control(('lastname'), ['class' => 'form-control', 'placeholder' => 'Enter Your Last Name']);
            echo $this->Form->control(('email'), ['class' => 'form-control', 'placeholder' => 'Enter Your Email Address']);
            echo $this->Form->control(('username'), ['class' => 'form-control', 'placeholder' => 'Chose Your Username']);
            echo $this->Form->control(('password'), ['class' => 'form-control', 'placeholder' => 'Enter Your Password']);
            echo $this->Form->control(('phone'), ['class' => 'form-control', 'placeholder' => 'Enter Admin Phone No']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('ADD'), ['class' => 'btn btn-default btn-primary pull-right']) ?>
    <?= $this->Form->end() ?>
</div>
