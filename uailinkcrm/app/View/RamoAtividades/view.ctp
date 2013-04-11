
<div class="ym-column">
  <div class="ym-col1" >
    <div class="ramoAtividades view ym-cbox">
      <h2><?php  echo __('Ramo Atividade');?></h2>
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
			<?php echo h($ramoAtividade['RamoAtividade']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($ramoAtividade['RamoAtividade']['descricao']); ?>
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
	  
		<?php echo $this->Html->link(__('Editar Ramo Atividade'), array('action' => 'edit', $ramoAtividade['RamoAtividade']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Ramo Atividade'), array('action' => 'delete', $ramoAtividade['RamoAtividade']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $ramoAtividade['RamoAtividade']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Ramo Atividades'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Ramo Atividade'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








