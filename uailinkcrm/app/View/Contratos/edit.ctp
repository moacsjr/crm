
<div class="ym-column">
    <div class="ym-col1" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Editar Contrato'); ?></h4>
    
            <div class="contratos form ym-cbox">
        <div class="ym-form ym-inline">
        <?php echo $this->Form->create('Contrato', array(
        'inputDefaults' => array(     
            'div'   => 'ym-fbox-text',
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'ym-error'
            )
        )
    ));?>
	        <h5><?php echo $pessoa['Pessoa']['nome'] ?><h5>
		        <h6 class="ym-fbox-heading"><?php echo __('Dados Contrato'); ?></h6>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id', array('type' => 'hidden', 'value' => $pessoa['Pessoa']['id']));
		echo $this->Form->input('produto_id');
		echo $this->Form->input('data_contrato');
		echo $this->Form->input('data_vencimento');
		echo $this->Form->input('dia_pagamento');
		echo $this->Form->input('descricao');
		echo $this->Form->input('ativo');
		echo $this->Form->input('cancelado');
		echo $this->Form->input('data_cancelamento');
		echo $this->Form->input('motivo_cancelamento');
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
	 

        		        <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Contrato.id')), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $this->Form->value('Contrato.id'))); ?>        		        <?php echo $this->Html->link(__('Listar Contratos'), array('action' => 'index'), array('class'=>'ym-button'));?>        <?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Produtos</h6>'); ?>		<?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	 
        </div>
    
    
    
    </div>
</div>







