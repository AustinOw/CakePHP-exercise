<!-- app/View/Home/add.ctp -->
<div class="form">
<?php echo $this->Form->create('Inventory'); ?>
    <fieldset>
        <legend><?php echo __('Add Item'); ?></legend>
        <?php echo $this->Form->input('ItemName');
	        echo $this->Form->input('Price', array(
	        	'Style' => 'width:20%',
	        ));

	        echo $this->Form->input('Quantity', array(
	        	'Style' => 'width:20%', 
	        ));
	        
	        echo $this->Form->input('Category', array(
	            'options' => array('Red Wine' => 'Red Wine', 'White Wine' => 'White Wine'),
	        ));

	        echo $this->Form->input('Year', array(
	        	'dateFormat' => 'Y',
                'minYear' => 1960, // start year
                'maxYear' => date('Y'),
            ));    

	        echo $this->Form->input('ImageLink');

	        echo $this->Form->input('Description');
	        //echo $this->Form->input('role', array(
	        //    'options' => array('administrator' => 'Admin', 'client' => 'Client')
	        //));
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
->