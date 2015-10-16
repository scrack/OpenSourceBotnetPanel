<div class="updatesLogs view">
<h2><?php echo __('Updates Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($updatesLog['UpdatesLog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update'); ?></dt>
		<dd>
			<?php echo $this->Html->link($updatesLog['Update']['name'], array('controller' => 'updates', 'action' => 'view', $updatesLog['Update']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uuid'); ?></dt>
		<dd>
			<?php echo h($updatesLog['UpdatesLog']['uuid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($updatesLog['UpdatesLog']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Updates Log'), array('action' => 'edit', $updatesLog['UpdatesLog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Updates Log'), array('action' => 'delete', $updatesLog['UpdatesLog']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $updatesLog['UpdatesLog']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Updates Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates'), array('controller' => 'updates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Update'), array('controller' => 'updates', 'action' => 'add')); ?> </li>
	</ul>
</div>
