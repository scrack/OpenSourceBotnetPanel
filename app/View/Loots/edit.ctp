<div class="loots form">
<?php echo $this->Form->create('Loot'); ?>
	<fieldset>
		<legend><?php echo __('Edit Loot'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('data');
		echo $this->Form->input('uuid');
		echo $this->Form->input('timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Loot.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Loot.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Loots'), array('action' => 'index')); ?></li>
	</ul>
</div>
