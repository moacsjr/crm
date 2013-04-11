<div class="ym-column">
    <div class="ym-col1" >
        <div class="produtos index ym-cbox">
	        <h2><?php echo __('Produtos');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['id']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $produto['Produto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $produto['Produto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $produto['Produto']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $produto['Produto']['id'])); ?>
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
	        
		        <?php echo $this->Html->link(__('Novo Produto'), array('action' => 'add'), array('class'=>'ym-button')); ?>        		<?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	        </ul>
        </div>
    </div>
</div>
