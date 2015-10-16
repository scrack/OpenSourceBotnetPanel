<div class="loots form">
<?php echo $this->Form->create('Loot'); ?>
	<fieldset>
		<legend><?php echo __('Add Loot'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('data');
		echo $this->Form->input('timestamp');
		echo $this->Form->input('uuid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Loots'), array('action' => 'index')); ?></li>
	</ul>
</div>
