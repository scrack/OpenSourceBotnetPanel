<div class="checkins form">
<?php echo $this->Form->create('Checkin'); ?>
	<fieldset>
		<legend><?php echo __('Add Checkin'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ip');
		echo $this->Form->input('timestamp');
		echo $this->Form->input('uuid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Checkins'), array('action' => 'index')); ?></li>
	</ul>
</div>
