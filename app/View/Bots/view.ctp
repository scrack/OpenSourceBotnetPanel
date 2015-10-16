<div class="bots view">
<h2><?php echo __('Bot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bot['Bot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bot['Bot']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($bot['Bot']['timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($bot['Bot']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Botshop'); ?></dt>
		<dd>
			<?php echo h($bot['Bot']['botshop']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bot'), array('action' => 'edit', $bot['Bot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bot'), array('action' => 'delete', $bot['Bot']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bot['Bot']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bot'), array('action' => 'add')); ?> </li>
	</ul>
</div>
