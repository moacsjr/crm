
<div class="ym-column">
    <div class="ym-col1" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Incluir Tipo Documento'); ?></h4>
    
            <div class="tipoDocumentos form ym-cbox">
        <div class="ym-form ym-inline">
        <?php echo $this->Form->create('TipoDocumento', array(
        'inputDefaults' => array(     
            'div'   => 'ym-fbox-text',
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'ym-error'
            )
        )
    ));?>
	        
		        <h6 class="ym-fbox-heading"><?php echo __('Dados Tipo Documento'); ?></h6>
        	<?php
		echo $this->Form->input('descricao');
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
	 

        		        <?php echo $this->Html->link(__('Listar Tipo Documentos'), array('action' => 'index'), array('class'=>'ym-button'));?>        <?php echo __('<h6>Pessoas Documentos</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('controller' => 'pessoas_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Documento'), array('controller' => 'pessoas_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	 
        </div>
    
    
    
    </div>
</div>







