<div class="ym-column">
    <div class="ym-col1" >
        <div class="pessoas index ym-cbox">
	        <h2><?php echo __('Cadastro de Pessoas Físicas / Jurídicas');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>	        		        
	        		        <th><?php echo $this->Paginator->sort('tipo_pessoa_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('nome');?></th>
	        		        <th><?php echo $this->Paginator->sort('fone1');?></th>	        		        
	        		        <th><?php echo $this->Paginator->sort('email');?></th>	        		        
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoas as $pessoa): ?>
	<tr>
		<td><?php echo h($pessoa['Pessoa']['id']); ?>&nbsp;</td>		
		<td>
			<?php echo $this->Html->link($pessoa['TipoPessoa']['descricao'], array('controller' => 'tipo_pessoas', 'action' => 'view', $pessoa['TipoPessoa']['id'])); ?>
		</td>
		<td><?php echo h($pessoa['Pessoa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['fone1']); ?>&nbsp;</td>		
		<td><?php echo h($pessoa['Pessoa']['email']); ?>&nbsp;</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?>
			<?php if($user_role === 'admin'): ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoa['Pessoa']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoa['Pessoa']['id'])); ?>
			<?php endif; ?>
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
	        
		        <?php echo $this->Html->link(__('Novo Pessoa'), array('action' => 'add'), array('class'=>'ym-button')); ?>        		
		         
		
		<?php if($user_role === 'admin'): ?>
		<?php echo $this->Html->link(__('Listar Ramo Atividades'), array('controller' => 'ramo_atividades', 'action' => 'index'), array('class'=>'ym-button')); ?>
		<?php echo $this->Html->link(__('Novo Ramo Atividade'), array('controller' => 'ramo_atividades', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Tipo Pessoas'), array('controller' => 'tipo_pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Tipo Pessoa'), array('controller' => 'tipo_pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('controller' => 'pessoas_conta_correntes', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Conta Corrente'), array('controller' => 'pessoas_conta_correntes', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Contatos'), array('controller' => 'pessoas_contatos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'pessoas_contatos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Enderecos'), array('controller' => 'pessoas_enderecos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Endereco'), array('controller' => 'pessoas_enderecos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Iterações'), array('controller' => 'pessoas_iteracoes', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Iteração'), array('controller' => 'pessoas_iteracoes', 'action' => 'add'), array('class'=>'ym-button')); ?>
		<?php endif;?> 
	        </ul>
        </div>
    </div>
</div>
