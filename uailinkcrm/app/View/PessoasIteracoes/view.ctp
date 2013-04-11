
<div class="ym-column">
  <div class="ym-col1" >
    <div class="pessoasIteracoes view ym-cbox">
      <h2><?php  echo __('Pessoas Iteração');?></h2>
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
			<?php echo h($pessoasIteracao['PessoasIteracao']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasIteracao['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasIteracao['Pessoa']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição Iteração'); ?></td>
			<td>
			<?php echo h($pessoasIteracao['PessoasIteracao']['descricao_iteracao']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Motivo'); ?></td>
			<td>
			<?php echo h($pessoasIteracao['PessoasIteracao']['motivo']); ?>
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
	  
		<?php echo $this->Html->link(__('Editar Pessoas Iteração'), array('action' => 'edit', $pessoasIteracao['PessoasIteracao']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Pessoas Iteração'), array('action' => 'delete', $pessoasIteracao['PessoasIteracao']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasIteracao['PessoasIteracao']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Iterações'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Iteração'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








