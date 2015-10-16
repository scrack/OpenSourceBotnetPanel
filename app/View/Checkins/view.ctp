<div class="checkins view">
<h2><?php echo __('Checkin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($checkin['Checkin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($checkin['Checkin']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($checkin['Checkin']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($checkin['Checkin']['timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uuid'); ?></dt>
		<dd>
			<?php echo h($checkin['Checkin']['uuid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Checkin'), array('action' => 'edit', $checkin['Checkin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Checkin'), array('action' => 'delete', $checkin['Checkin']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $checkin['Checkin']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Checkins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkin'), array('action' => 'add')); ?> </li>
	</ul>
</div>
