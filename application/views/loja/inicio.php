<!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
    	<!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="Principal"><img src= "<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
            <li><a href="Principal"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
            <li><a href="Principal"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
            <li><a href="Principal"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="compra" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
      <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
        	<?php
            foreach ($jaquetas as $jaqueta):
          ?>
          
            <li classe = "last" > <a href="<?php echo base_url("compra/$jaqueta->idJaqueta"); ?>"><img width="231" height="383" src="<?php echo base_url("produtos/$jaqueta->imagem"); ?>" alt="" /></a>
            <div class="product-info">
              <h3><?php echo $jaqueta->jaqueta ?></h3>
              <div class="product-desc">
                <p><?php echo $jaqueta->descricao ?><br />
                 </p>
                <strong class="price"><?php echo "R$ ". number_format($jaqueta->valor,2,",","."); ?></strong> </div>
            </div>
          </li>
			
          <?php 
            endforeach;
          ?>
        	
          
          
          
       <!--   <li> <a href="compra"><img src="<?php echo base_url("static/css/images/big2.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
          <li class="last"> <a href="compra"><img src="<?php echo base_url("static/css/images/big3.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
		  <li class=""> <a href="compra"><img src="<?php echo base_url("static/css/images/big1.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
		  <li class=""> <a href="compra"><img src="<?php echo base_url("static/css/images/big2.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
		  <li class="last"> <a href="compra"><img src="<?php echo base_url("static/css/images/big3.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>-->
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
	 <!-- Search -->
      <div class="box search">
        <h2>Procurar <span></span></h2>
        <div class="box-content">
          <form action="#" method="post">
            <label>Palavra Chave</label>
            <input type="text" class="field" />
            <!--<label>Categoria</label>
            <select class="field">
              <option value="">-- Selecione Categoria --</option>
            </select>-->
            <input type="submit" class="search-submit" value="Procura" />
           <!-- <p> <a href="#" class="bul">Advanced search</a><br />
              <a href="#" class="bul">Contact Customer Support</a> </p>-->
          </form>
        </div>
      </div>
      <!-- Categories -->
      <div class="box categories">
        <h2>Categorias <span></span></h2>
        <div class="box-content">
          <ul>
          	<?php 
            foreach ($categorias as $categoria):
          ?>
            <li><a href="<?php echo base_url('categoria/'.$categoria->idCategoria) ?>"><?php echo $categoria->categoria ?></a></li>

          <?php 
            endforeach;
          ?>
          	
           <!-- <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <li><a href="#">Category 4</a></li>
            <li><a href="#">Category 5</a></li>
            <li><a href="#">Category 6</a></li>
            <li><a href="#">Category 7</a></li>
            <li><a href="#">Category 8</a></li>
            <li><a href="#">Category 9</a></li>
            <li><a href="#">Category 10</a></li>
            <li><a href="#">Category 11</a></li>
            <li><a href="#">Category 12</a></li>
			<li><a href="#">Category 13</a></li>
            <li><a href="#">Category 14</a></li>
            <li><a href="#">Category 15</a></li>
			<li><a href="#">Category 16</a></li>
            <li class="last"><a href="#">Category 17</a></li>-->
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small4.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small5.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small6.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small7.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small4.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small5.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small6.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small7.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" /></a></li>
          <li><a href="compra"><img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small4.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small5.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small6.jpg"); ?>" alt="" /></a></li>
          <li class="last"><a href="#"><img src="<?php echo base_url("static/css/images/small7.jpg"); ?>" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products -->
   <!-- Text Cols--> 
    <!--<div class="cols">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico1">Agende um envio</h3>
        <p>Agende um presente para um amigo, parente ou colega que mora longe.</p>
        <p class="more"><a href="#" class="bul">Clique Aqui</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico2">Entre em Contato</h3>
        <p>Entre em contato conosco e receba no email as mais novas categorias de jaquetas.</p>
        <p class="more"><a href="#" class="bul">Clique aqui para cadastrar seu email</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico3">Envie um Presente</h3>
        <p>Envie um presente para um amigo, parente ou colega que mora longe.</</p>
        <p class="more"><a href="#" class="bul">Clique Aqui</a></p>
      </div>
      <div class="col col-last">
        <h3 class="ico ico4">Carrinho</h3>
        <p>Escolha suas opções de compras sem compromisso, divirta-se.</p>
        <p class="more"><a href="Pedido" class="bul">Clique Aqui</a></p>
      </div>
      <div class="cl">&nbsp;</div>
    </div>-->
    <!-- End Text Cols-->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
 <!--Footer--> 
  <div id="footer">
    <!--<p class="left"> <a href="Principal">Inicio</a> <span>|</span> <a href="#">Contato</a> <span>|</span> <a href="Pedido">Minha Conta</a> <span>|</span> <a href="categoria">Galeria</a> <span>|</span> <a href="#"> Trabalhe Conosco</a> </p></span>-->
    <p class="right"> &copy; 2015 LimaJacket. Ltda </p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->