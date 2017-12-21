<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Admin $admin
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
  <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn  btn-info']) ?>  
    <h3>Top Page Content</h3>
    <table class="table table-condensed">
        <tr>
            <th scope="row"><?= __('Logotext') ?></th>
            <td><?= h($admin->logotext) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($admin->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quote') ?></th>
            <td><?= h($admin->quote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('About Heading') ?></th>
            <td><?= h($admin->about_heading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($admin->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($admin->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($admin->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($admin->website) ?></td>
        </tr>
        <?php /* <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->id) ?></td>
        </tr> */?>
        <tr>
            <th scope="row"><?= __('Phone1') ?></th>
            <td><?= $this->Number->format($admin->phone1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone2') ?></th>
            <td><?= $this->Number->format($admin->phone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($admin->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($admin->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('First Paragraph') ?></h4>
        <?= $this->Text->autoParagraph(h($admin->first_paragraph)); ?>
    </div>
    <div class="row">
        <h4><?= __('Second Paragraph') ?></h4>
        <?= $this->Text->autoParagraph(h($admin->second_paragraph)); ?>
    </div>
</div>
