
<div class="ym-column">
  <div class="ym-col1" >
    <div class="pessoasContatos view ym-cbox">
      <h2><?php  echo __('Pessoas Contato');?></h2>
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
			<?php echo h($pessoasContato['PessoasContato']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasContato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasContato['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Nome'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['nome']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cargo'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['cargo']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Email'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['email']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Fone1'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['fone1']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Fone2'); ?></td>
			<td>
			<?php echo h($pessoasContato['PessoasContato']['fone2']); ?>
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
	  
		<?php echo $this->Html->link(__('Editar Pessoas Contato'), array('action' => 'edit', $pessoasContato['PessoasContato']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Pessoas Contato'), array('action' => 'delete', $pessoasContato['PessoasContato']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasContato['PessoasContato']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Contato'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








