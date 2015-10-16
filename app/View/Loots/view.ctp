<div class="loots view">
<h2><?php echo __('Loot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loot['Loot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($loot['Loot']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($loot['Loot']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uuid'); ?></dt>
		<dd>
			<?php echo h($loot['Loot']['uuid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($loot['Loot']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loot'), array('action' => 'edit', $loot['Loot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loot'), array('action' => 'delete', $loot['Loot']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $loot['Loot']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Loots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loot'), array('action' => 'add')); ?> </li>
	</ul>
</div>
