<?php $pessoa = array('Pessoa' => $this->data['Pessoa']); ?>
<div class="ym-column">
    <div class="ym-col1" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Editar Pessoa'); ?></h4>
    
            <div class="pessoas form ym-cbox">
        <div class="ym-form ym-inline">
        <?php echo $this->Form->create('Pessoa', array(
        'inputDefaults' => array(     
            'div'   => 'ym-fbox-text',
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'ym-error'
            )
        )
    ));?>
	        
		        <h6 class="ym-fbox-heading"><?php echo __('Dados Pessoa'); ?></h6>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ramo_atividade_id');
		echo $this->Form->input('tipo_pessoa_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('fone1');
		echo $this->Form->input('fone2');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('data_cadastro');
		echo $this->Form->input('data_alteracao');
	?>
	    
	        <div class="ym-fbox-button">
              <input type="submit" class="ym-button" value="Enviar" id="submit" name="Enviar" />
              <input type="reset" class="ym-button" value="Limpar" id="reset" name="Limpar" />              
            </div>
	    
	    
        <?php echo $this->Form->end();?>
        </div>
        </div>
    
    
    </div>    
    <div class="ym-col3" >
    
        <div class="actions ym-cbox">
	        <h4><?php echo __('Ações'); ?></h4>
	 

        		        <?php if($user_role === 'admin') echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Pessoa.id')), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $this->Form->value('Pessoa.id'))); ?>        		        <?php echo $this->Html->link(__('Listar Pessoas'), array('action' => 'index'), array('class'=>'ym-button'));?>        	
		
		<?php echo __('<h6>Ramo Atividades</h6>'); ?>		
		<?php echo $this->Html->link(__('Novo Ramo Atividade'), array('controller' => 'ramo_atividades', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		
<?php echo __('<h6>Contratos</h6>'); ?>		
		<?php echo $this->Html->link(__('Novo Contrato'), array('controller' => 'contratos', 'action' => 'add', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?> 

<?php echo __('<h6>Conta Correntes</h6>'); ?>
		<?php echo $this->Html->link(__('Novo Conta Corrente'), array('controller' => 'pessoas_conta_correntes', 'action' => 'add', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?> 

<?php echo __('<h6>Contatos</h6>'); ?>		
		<?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'pessoas_contatos', 'action' => 'add', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Documentos</h6>'); ?>		
		<?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Enderecos</h6>'); ?>		
		<?php echo $this->Html->link(__('Novo Endereco'), array('controller' => 'pessoas_enderecos', 'action' => 'add', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Iterações</h6>'); ?>		
		<?php echo $this->Html->link(__('Novo Iteração'), array('controller' => 'pessoas_iteracoes', 'action' => 'add', $pessoa['Pessoa']['id']), array('class'=>'ym-button')); ?>
        
        </div>
    
    
    
    </div>
</div>







