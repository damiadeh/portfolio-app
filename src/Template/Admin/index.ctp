<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admin
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
                    <h2><b><?= $this->Html->link(__('ADMIN'), ['action' => 'index']) ?></b></h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php foreach ($admin as $admin): ?>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><?= $this->Html->link(__('Home'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Visit Site'), ['controller'=>'pages','action' => 'display']); ?></li>
                        <li><?= $this->Html->link(__('Logout'), ['controller'=>'users','action' => 'logout']); ?></li>
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
        <h1 class="text-center">Welcome <?= h($admin->name) ?></h1><hr>
        <?= $this->Flash->render('message'); ?>

                    <div class="row">
                        <?= $this->Html->link(__('Edit Top Part of the Page'), ['action' => 'edit', $admin->id],['class' => 'btn btn-default btn-primary col-md-4']); ?>
                        <?= $this->Html->link(__('View top part of page content'), ['action' => 'view', $admin->id], ['class' => 'col-md-4']) ?>
                    </div><br>
                    <div class="row">
                        <?= $this->Html->link(__('Your Experiences'), ['controller' => 'experience','action' => 'index'],['class' => 'btn btn-default btn-primary col-md-4']); ?>
                    </div><br>
                    <div class="row">
                        <?= $this->Html->link(__('Your Educational backgroud'), ['controller' => 'education','action' => 'index'],['class' => 'btn btn-default btn-primary col-md-4']); ?>
                    </div><br>
                    <div class="row">
                        <?= $this->Html->link(__('View Admin Users'), ['controller' => 'users','action' => 'index'],['class' => 'btn btn-default btn-primary col-md-4']); ?>
                     </div>
                    
</div>

<?php endforeach; ?>

