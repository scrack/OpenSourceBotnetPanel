<div class="bots form">
<?php echo $this->Form->create('Bot'); ?>
	<fieldset>
		<legend><?php echo __('Add Bot'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('timestamp');
		echo $this->Form->input('ip');
		echo $this->Form->input('botshop');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bots'), array('action' => 'index')); ?></li>
	</ul>
</div>
