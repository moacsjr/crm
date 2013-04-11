<div class="ym-column">
    <div class="ym-col1" >
        <div class="tipoDocumentos index ym-cbox">
	        <h2><?php echo __('Tipo Documentos');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($tipoDocumentos as $tipoDocumento): ?>
	<tr>
		<td><?php echo h($tipoDocumento['TipoDocumento']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoDocumento['TipoDocumento']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipoDocumento['TipoDocumento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipoDocumento['TipoDocumento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $tipoDocumento['TipoDocumento']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $tipoDocumento['TipoDocumento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	        </table>
	        <p>
	        <?php
	        echo $this->Paginator->counter(array(
	        'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}, começando no registro {:start}, e terminando no {:end}')
	        ));
	        ?>	        </p>

	        <div class="paging">
	        <?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	        </div>
        </div>
    </div>
    <div class="ym-col3">
        <div class="actions ym-cbox">
	        <h3><?php echo __('Ações'); ?></h3>
	        
		        <?php echo $this->Html->link(__('Novo Tipo Documento'), array('action' => 'add'), array('class'=>'ym-button')); ?>        		<?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	        </ul>
        </div>
    </div>
</div>
