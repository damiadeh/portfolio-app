<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Experience $experience
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
                    <h2><b><?= $this->Html->link(__('ADMIN'), ['controller'=>'admin','action' => 'index',1]) ?></b></h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><?= $this->Html->link(__('Home'), ['controller'=>'admin','action' => 'index',1]) ?></li>
                    
                        <li><?= $this->Html->link(__('Visit Site'), ['controller'=>'pages','action' => 'display',1]); ?></li>
                        <li><?= $this->Html->link(__('Logout'), ['controller'=>'users','action' => 'logout']); ?></li>
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

<div class="container">
    
        <div class="col-md-3">
            <?= $this->Html->link(__('Edit Experience'), ['action' => 'edit', $experience->id],['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-md-3">
            <?= $this->Form->postLink(__('Delete Experience'), ['action' => 'delete', $experience->id],['class' => 'btn btn-primary'], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?>
        </div>
        <div class="col-md-3">
            <?= $this->Html->link(__('New Experience'), ['action' => 'add'],['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-md-3">
            <?= $this->Html->link(__('Back'), ['action' => 'index'],['class' => 'btn btn-danger']) ?> 
        </div>
    <br><br>
    <h3>Experience Overview</h3>
    <table class="table table-condensed">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= h($experience->company) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exp Duration') ?></th>
            <td><?= h($experience->exp_duration) ?></td>
        </tr>
        <?php /* <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($experience->id) ?></td>
        </tr> */ ?>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($experience->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($experience->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Experience Description') ?></h4>
        <?= $this->Text->autoParagraph(h($experience->exp_description)); ?>
    </div>
</div>
