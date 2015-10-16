<div class="works view">
<h2><?php echo __('Work'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($work['Work']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($work['Work']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work'); ?></dt>
		<dd>
			<?php echo h($work['Work']['work']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($work['Work']['timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Counter'); ?></dt>
		<dd>
			<?php echo h($work['Work']['counter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max'); ?></dt>
		<dd>
			<?php echo h($work['Work']['max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alive'); ?></dt>
		<dd>
			<?php echo h($work['Work']['alive']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Work'), array('action' => 'edit', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Work'), array('action' => 'delete', $work['Work']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $work['Work']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('action' => 'add')); ?> </li>
	</ul>
</div>
