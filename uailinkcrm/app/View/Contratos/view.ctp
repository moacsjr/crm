
<div class="ym-column">
  <div class="ym-col1" >
    <div class="contratos view ym-cbox">
      <h2><?php  echo __('Contrato');?></h2>
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
			<?php echo h($contrato['Contrato']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($contrato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $contrato['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Produto'); ?></td>
			<td>
			<?php echo $this->Html->link($contrato['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $contrato['Produto']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Contrato'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['data_contrato']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Vencimento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['data_vencimento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Dia Pagamento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['dia_pagamento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['descricao']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Ativo'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['ativo']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cancelado'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['cancelado']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Data Cancelamento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['data_cancelamento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Motivo Cancelamento'); ?></td>
			<td>
			<?php echo h($contrato['Contrato']['motivo_cancelamento']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>
<div class="ym-col3" >
    <div class="actions ym-cbox">    
      <h6><?php echo __('Ações'); ?></h6>
	  
		<?php echo $this->Html->link(__('Editar Contrato'), array('action' => 'edit', $contrato['Contrato']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Contrato'), array('action' => 'delete', $contrato['Contrato']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $contrato['Contrato']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Contratos'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Contrato'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Produtos</h6>'); ?>		<?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








