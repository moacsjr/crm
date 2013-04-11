
<div class="ym-column">
  <div class="ym-col1" >
    <div class="pessoasContaCorrentes view ym-cbox">
      <h2><?php  echo __('Pessoas Conta Corrente');?></h2>
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
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasContaCorrente['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasContaCorrente['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['descricao']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Banco'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['banco']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Agencia'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['agencia']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Numero'); ?></td>
			<td>
			<?php echo h($pessoasContaCorrente['PessoasContaCorrente']['numero']); ?>
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
	  
		<?php echo $this->Html->link(__('Editar Pessoas Conta Corrente'), array('action' => 'edit', $pessoasContaCorrente['PessoasContaCorrente']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Pessoas Conta Corrente'), array('action' => 'delete', $pessoasContaCorrente['PessoasContaCorrente']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasContaCorrente['PessoasContaCorrente']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Conta Corrente'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








