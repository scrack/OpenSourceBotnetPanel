<div class="updates form">
<?php echo $this->Form->create('Update'); ?>
	<fieldset>
		<legend><?php echo __('Edit Update'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('version');
		echo $this->Form->input('timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Update.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Update.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Updates'), array('action' => 'index')); ?></li>
	</ul>
</div>
