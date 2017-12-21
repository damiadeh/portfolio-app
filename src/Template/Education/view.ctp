<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Education $education
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


<div class="container">
    <div class="col-md-3">
            <?= $this->Html->link(__('Edit Education'), ['action' => 'edit', $education->id],['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-md-3">
            <?= $this->Form->postLink(__('Delete Education'), ['action' => 'delete', $education->id],['class' => 'btn btn-primary'], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]) ?>
        </div>
        <div class="col-md-3">
            <?= $this->Html->link(__('New Education'), ['action' => 'add'],['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-md-3">
           <?= $this->Html->link(__('Back'), ['action' => 'index'],['class' => 'btn btn-danger']) ?>
        </div>
        
    <h3>Education Overview</h3>
    <table class="vertical-table table table-condensed">
        <tr>
            <th scope="row"><?= __('School Name') ?></th>
            <td><?= h($education->school_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sch Duration') ?></th>
            <td><?= h($education->sch_duration) ?></td>
        </tr>
       <?php /* <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($education->id) ?></td>
        </tr> */ ?>
    </table>
    <div class="row">
        <h4><?= __('Sch Description') ?></h4>
        <?= $this->Text->autoParagraph(h($education->sch_description)); ?>
    </div>
</div>
