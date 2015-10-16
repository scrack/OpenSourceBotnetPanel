<div class="updates view">
<h2><?php echo __('Update'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($update['Update']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($update['Update']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($update['Update']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($update['Update']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Update'), array('action' => 'edit', $update['Update']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Update'), array('action' => 'delete', $update['Update']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $update['Update']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Update'), array('action' => 'add')); ?> </li>
	</ul>
</div>
