<div class="ym-column">
    <div class="ym-col1" >
        <div class="pessoasIteracoes index ym-cbox">
	        <h2><?php echo __('Pessoas Iterações');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('pessoa_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao_iteracao');?></th>
	        		        <th><?php echo $this->Paginator->sort('motivo');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoasIteracoes as $pessoasIteracao): ?>
	<tr>
		<td><?php echo h($pessoasIteracao['PessoasIteracao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoasIteracao['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasIteracao['Pessoa']['id'])); ?>
		</td>
		<td><?php echo h($pessoasIteracao['PessoasIteracao']['descricao_iteracao']); ?>&nbsp;</td>
		<td><?php echo h($pessoasIteracao['PessoasIteracao']['motivo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoasIteracao['PessoasIteracao']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoasIteracao['PessoasIteracao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoasIteracao['PessoasIteracao']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoasIteracao['PessoasIteracao']['id'])); ?>
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
	        
		        <?php echo $this->Html->link(__('Novo Pessoas Iteração'), array('action' => 'add'), array('class'=>'ym-button')); ?>        		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	        </ul>
        </div>
    </div>
</div>
