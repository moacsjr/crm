
<div class="ym-column">
  <div class="ym-col1" >
    <div class="produtos view ym-cbox">
      <h2><?php  echo __('Produto');?></h2>
      <table>
	     <thead>
	        <tr>
	          <td width="20%">Campo</td>
	          <td width="80%">Descrição</td>
	        </tr>
	      </thead>
	      <tbody>
			<tr>			<td><?php echo __('Id'); ?></td>
			<td>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Contratos relacionados');?></h3>
	<?php if (!empty($produto['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Data Contrato'); ?></th>
		<th><?php echo __('Data Vencimento'); ?></th>
		<th><?php echo __('Dia Pagamento'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th><?php echo __('Ativo'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th><?php echo __('Data Cancelamento'); ?></th>
		<th><?php echo __('Motivo Cancelamento'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($produto['Contrato'] as $contrato): ?>
		<tr>
			<td><?php echo $contrato['id'];?></td>
			<td><?php echo $contrato['pessoa_id'];?></td>
			<td><?php echo $contrato['produto_id'];?></td>
			<td><?php echo $contrato['data_contrato'];?></td>
			<td><?php echo $contrato['data_vencimento'];?></td>
			<td><?php echo $contrato['dia_pagamento'];?></td>
			<td><?php echo $contrato['descricao'];?></td>
			<td><?php echo $contrato['ativo'];?></td>
			<td><?php echo $contrato['cancelado'];?></td>
			<td><?php echo $contrato['data_cancelamento'];?></td>
			<td><?php echo $contrato['motivo_cancelamento'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'contratos', 'action' => 'view', $contrato['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'contratos', 'action' => 'edit', $contrato['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']), null, __('Você tem certeza que deseja excluir o # %s?', $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>
<div class="ym-col3" >
    <div class="actions ym-cbox">    
      <h6><?php echo __('Ações'); ?></h6>
	  
		<?php echo $this->Html->link(__('Editar Produto'), array('action' => 'edit', $produto['Produto']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Produto'), array('action' => 'delete', $produto['Produto']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $produto['Produto']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Produto'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Contratos</h6>'); ?>		<?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








