
<div class="ym-column">
  <div class="ym-col1" >
    <div class="tipoDocumentos view ym-cbox">
      <h2><?php  echo __('Tipo Documento');?></h2>
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
			<?php echo h($tipoDocumento['TipoDocumento']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($tipoDocumento['TipoDocumento']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Pessoas Documentos relacionados');?></h3>
	<?php if (!empty($tipoDocumento['PessoasDocumento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Tipo Documento Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($tipoDocumento['PessoasDocumento'] as $pessoasDocumento): ?>
		<tr>
			<td><?php echo $pessoasDocumento['id'];?></td>
			<td><?php echo $pessoasDocumento['numero'];?></td>
			<td><?php echo $pessoasDocumento['tipo_documento_id'];?></td>
			<td><?php echo $pessoasDocumento['pessoa_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pessoas_documentos', 'action' => 'view', $pessoasDocumento['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pessoas_documentos', 'action' => 'edit', $pessoasDocumento['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'pessoas_documentos', 'action' => 'delete', $pessoasDocumento['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoasDocumento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Pessoas Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>
<div class="ym-col3" >
    <div class="actions ym-cbox">    
      <h6><?php echo __('Ações'); ?></h6>
	  
		<?php echo $this->Html->link(__('Editar Tipo Documento'), array('action' => 'edit', $tipoDocumento['TipoDocumento']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Tipo Documento'), array('action' => 'delete', $tipoDocumento['TipoDocumento']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $tipoDocumento['TipoDocumento']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Tipo Documentos'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Tipo Documento'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas Documentos</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








