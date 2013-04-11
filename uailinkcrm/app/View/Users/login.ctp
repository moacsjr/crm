<div class="users form" style="width: 500px ;  margin-left: auto ;  margin-right: auto ;">

<h3>UAILink CRM - Login</h3>

<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User' 
		, array(
				'class' => 'ym-form',
				'inputDefaults' => array(
						'div'   => 'ym-fbox-text',
						# define error defaults for the form
						'error' => array(
								'wrap'  => 'span',
								'class' => 'ym-error'
						)
				)
		)
		); ?>
    <fieldset>
        <legend><?php echo __('Favor informar o usuário e senha'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');       
    ?>
    </fieldset>
    <div class="ym-fbox-button">
    	<input type="submit" class="ym-button" name="login" value="Login"/>    	
    </div>
<?php echo $this->Form->end(); ?>

</div>
