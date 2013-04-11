
<div class="ym-column">
  <div class="ym-col1" >
    <div class="pessoasEnderecos view ym-cbox">
      <h2><?php  echo __('Pessoas Endereco');?></h2>
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
			<?php echo h($pessoasEndereco['PessoasEndereco']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasEndereco['Pessoa']['nome'], array('controller' => 'pessoas', 'action' => 'view', $pessoasEndereco['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Logradouro'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['logradouro']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Numero'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['numero']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Complemento'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['complemento']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cep'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['cep']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Bairro'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['bairro']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Cidade'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['cidade']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Estado'); ?></td>
			<td>
			<?php echo h($pessoasEndereco['PessoasEndereco']['estado']); ?>
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
	  
		<?php echo $this->Html->link(__('Editar Pessoas Endereco'), array('action' => 'edit', $pessoasEndereco['PessoasEndereco']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Pessoas Endereco'), array('action' => 'delete', $pessoasEndereco['PessoasEndereco']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasEndereco['PessoasEndereco']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Enderecos'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Endereco'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








