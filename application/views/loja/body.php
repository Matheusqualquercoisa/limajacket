<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="<?php echo base_url("Principal")?>" >Lima Jacket</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="<?php echo base_url("Pedido")?>" class="cart-link">Carrinho</a>
      <div class="cl">&nbsp;</div>
      <?php 	if($this->cart->total_items()>0): ?>
      <span> Produto(s): <strong><?php echo $this->cart->total_items() ?></strong></span> &nbsp;&nbsp; </div>
      <?php else:  ?>
      <span> Produto: <strong>0</strong></span> &nbsp;&nbsp; </div>
		<?php endif;  ?>
	  	
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
<<<<<<< HEAD
        <li><a href="Principal" class="active">Inicio</a></li>
        <li><a href="Categoria">Compras</a></li>
        <li><a href="Pedido">Pedidos</a></li>
        <?php  if(!$this->session->userdata('is_logged_in')){ ?>
        	<li><a href="admin">Login</a></li>
        <?php }else{ ?>
        	<ul class="nav navbar-nav navbar-right">
	       		<li> <a href="#" ><span class="glyphicon glyphicon-user"></span>  <?php echo $this->session->userdata('login'); ?> </a> </li>
	       		<li> <a href="<?php echo base_url('admin/login/logout') ?>"><span class="glyphicon glyphicon-off"></span> Sair </a> </li>
	    	</ul>
	    <?php } ?>
        <!--<li><a href="#">Contato</a></li>-->
=======
        <li><a href="<?php echo base_url("Principal")?>" class="active">Inicio</a></li>
        <li><a href="<?php echo base_url("Categoria")?>">Compras</a></li>
        <li><a href="<?php echo base_url("Pedido")?>">Pedidos</a></li>
        <li><a href="<?php echo base_url("login")?>">Login</a></li>
        <li><a href="#">Contato</a></li>
>>>>>>> 22375bb958f979c329e2e6c00dc4af31b79df2d6
      </ul>
    </div>
    <!-- End Navigation -->
  </div>