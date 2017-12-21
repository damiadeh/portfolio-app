


<style>
    body{
       
        background-size: 100vw 100vh;
        background-attachment: fixed;
    }
    h2{
        color: darkblue;
    }
    
</style>

<div id="login-form">
    
    <h2 class="text-center">Login</h2><hr>
     <?= $this->Form->create() ?>
        <?php
            
            echo $this->Form->innput(('email'), ['class' => 'form-control', 'placeholder' => 'Enter Your Email Address']);
            echo $this->Form->input(('password'), ['type' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Your Password']);
        ?>
    <?= $this->Form->submit(('LOGIN'), ['class' => 'btn form-control','id' => 'login-button']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link(__('Visit Main Site'), ['controller'=>'pages','action' => 'display'],['class' => 'pull-right']); ?>
    <br>
    
</div>
