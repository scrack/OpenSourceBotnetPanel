<div class="updatesLogs form">
<?php echo $this->Form->create('UpdatesLog'); ?>
	<fieldset>
		<legend><?php echo __('Add Updates Log'); ?></legend>
	<?php
		echo $this->Form->input('update_id');
		echo $this->Form->input('timestamp');
		echo $this->Form->input('uuid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Updates Logs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Updates'), array('controller' => 'updates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Update'), array('controller' => 'updates', 'action' => 'add')); ?> </li>
	</ul>
</div>
