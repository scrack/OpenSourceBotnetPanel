<div class="bots index">
	<h2><?php echo __('Bots'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('botshop'); ?></th>
			<th><?php echo $this->Paginator->sort('uuid'); ?></th>
			<th><?php echo $this->Paginator->sort('timestamp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bots as $bot): ?>
	<tr>
		<td><?php echo h($bot['Bot']['id']); ?>&nbsp;</td>
		<td><?php echo h($bot['Bot']['name']); ?>&nbsp;</td>
		<td><?php echo h($bot['Bot']['ip']); ?>&nbsp;</td>
		<td><?php echo h($bot['Bot']['botshop']); ?>&nbsp;</td>
		<td><?php echo h($bot['Bot']['uuid']); ?>&nbsp;</td>
		<td><?php echo h($bot['Bot']['timestamp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bot['Bot']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bot['Bot']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bot['Bot']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bot['Bot']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Bot'), array('action' => 'add')); ?></li>
	</ul>
</div>
