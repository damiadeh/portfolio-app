<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Education[]|\Cake\Collection\CollectionInterface $education
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
   <?= $this->Html->link(__('New Educational Background'), ['action' => 'add'], ['class' => 'btn btn-default btn-primary']) ?>
    <h3><?= __('Education') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-condensed">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sch_duration') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($education as $education): ?>
            <tr>
                <td><?= $this->Number->format($education->id) ?></td>
                <td><?= h($education->school_name) ?></td>
                <td><?= h($education->sch_duration) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $education->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $education->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $education->id], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
