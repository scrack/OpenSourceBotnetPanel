<div class="works index">
	<h2><?php echo __('Works'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('work'); ?></th>
			<th><?php echo $this->Paginator->sort('counter'); ?></th>
			<th><?php echo $this->Paginator->sort('max'); ?></th>
			<th><?php echo $this->Paginator->sort('alive'); ?></th>
			<th><?php echo $this->Paginator->sort('timestamp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($works as $work): ?>
	<tr>
		<td><?php echo h($work['Work']['id']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['name']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['work']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['counter']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['max']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['alive']); ?>&nbsp;</td>
		<td><?php echo h($work['Work']['timestamp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $work['Work']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $work['Work']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $work['Work']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $work['Work']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Work'), array('action' => 'add')); ?></li>
	</ul>
</div>
