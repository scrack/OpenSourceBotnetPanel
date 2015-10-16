<div class="works form">
<?php echo $this->Form->create('Work'); ?>
	<fieldset>
		<legend><?php echo __('Add Work'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('work');
		echo $this->Form->input('counter');
		echo $this->Form->input('max');
		echo $this->Form->input('alive');
		echo $this->Form->input('timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?></li>
	</ul>
</div>
