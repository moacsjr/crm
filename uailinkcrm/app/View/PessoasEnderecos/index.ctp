<div class="ym-column">
    <div class="ym-col1" >
        <div class="pessoasEnderecos index ym-cbox">
	        <h2><?php echo __('Pessoas Enderecos');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('pessoa_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('logradouro');?></th>
	        		        <th><?php echo $this->Paginator->sort('numero');?></th>
	        		        <th><?php echo $this->Paginator->sort('complemento');?></th>
	        		        <th><?php echo $this->Paginator->sort('cep');?></th>
	        		        <th><?php echo $this->Paginator->sort('bairro');?></th>
	        		        <th><?php echo $this->Paginator->sort('cidade');?></th>
	        		        <th><?php echo $this->Paginator->sort('estado');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoasEnderecos as $pessoasEndereco): ?>
	<tr>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoasEndereco['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasEndereco['Pessoa']['id'])); ?>
		</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['logradouro']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['numero']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['complemento']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['cep']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($pessoasEndereco['PessoasEndereco']['estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoasEndereco['PessoasEndereco']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoasEndereco['PessoasEndereco']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoasEndereco['PessoasEndereco']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoasEndereco['PessoasEndereco']['id'])); ?>
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
	        
		        <?php echo $this->Html->link(__('Novo Pessoas Endereco'), array('action' => 'add'), array('class'=>'ym-button')); ?>        		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	        </ul>
        </div>
    </div>
</div>
