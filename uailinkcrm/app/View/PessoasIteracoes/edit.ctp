
<div class="ym-column">
    <div class="ym-col1" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Editar Pessoas Iteração'); ?></h4>
    
            <div class="pessoasIteracoes form ym-cbox">
        <div class="ym-form ym-inline">
        <?php echo $this->Form->create('PessoasIteracao', array(
        'inputDefaults' => array(     
            'div'   => 'ym-fbox-text',
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'ym-error'
            )
        )
    ));?>
	        
		        <h6 class="ym-fbox-heading"><?php echo __('Dados Pessoas Iteração'); ?></h6>
        	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('descricao_iteracao');
		echo $this->Form->input('motivo');
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
	 

        		        <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('PessoasIteracao.id')), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $this->Form->value('PessoasIteracao.id'))); ?>        		        <?php echo $this->Html->link(__('Listar Pessoas Iterações'), array('action' => 'index'), array('class'=>'ym-button'));?>        <?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	 
        </div>
    
    
    
    </div>
</div>







