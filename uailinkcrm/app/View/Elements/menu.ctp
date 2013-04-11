<ul>
	<?php
	
	    $page = ($this->name != 'Pages')? $this->view : $this->getVar('page');
	    
	    $homelink = ($page == 'home')? "<strong>Home</strong>" : $this->Html->link('<span>Home</span>', $this->SiteURL->home(),array('escape' => false));
	    $cadastrolink = ($page == 'pessoas')? "<strong>Cadastro</strong>" : $this->Html->link('<span>Cadastro</span>', $this->SiteURL->cadastro(),array('escape' => false));
	    
	    
	 ?>
	
	<li <?php if($page == 'home') echo 'class="active"' ?> > <?php echo $homelink ?> </li>	
	<li <?php if($page == 'pessoas') echo 'class="active"' ?> > <?php echo $cadastrolink ?> </li>
	
</ul>
