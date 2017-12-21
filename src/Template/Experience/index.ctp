<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Experience[]|\Cake\Collection\CollectionInterface $experience
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
    <h3><?= __('Experience') ?></h3>
    <?= $this->Html->link(__('New Experience'), ['action' => 'add'],['class' => 'btn btn-default btn-primary']) ?>
    <table cellpadding="0" cellspacing="0" class="table table-condensed">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exp_duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($experience as $experience): ?>
            <tr>
                <td><?= $this->Number->format($experience->id) ?></td>
                <td><?= h($experience->company) ?></td>
                <td><?= h($experience->exp_duration) ?></td>
                <td><?= h($experience->created) ?></td>
                <td><?= h($experience->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $experience->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experience->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?>
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
