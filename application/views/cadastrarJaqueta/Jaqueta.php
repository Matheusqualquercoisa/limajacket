<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>gerenciarcliente</title>
		<meta name="author" content="Rafael" />
		<!-- Date: 2014-11-20 -->
		<link type="text/css" href="<?php echo base_url ("static/css/bootstrap.css")?>" rel="stylesheet" media="screen">
		<link type="text/css" href="<?php echo base_url ("static/css/Estilos.css")?>" rel="stylesheet" media="screen">
		
		<script type="text/javaScript" src="<?php echo base_url("static/js/jquery-1.10.1.mini.js")?>"</script>
		<script type="text/javaScript" src="<?php echo base_url("static/Js/jquery.maskedinput.min.js")?>"></script>
		
		<script type="text/javascript">
		function  fBusca(){
			busca=document.getElementById('nome').value;
			url="gerenciarcliente.php?nomeCliente="+busca;
			window.location=url;
			}
						/*jQuery(document).ready(function() {
            //Inicio Mascara Telefone
            jQuery('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            });
            //Fim Mascara Telefone
            //Inicio Mascara RG
            //jQuery("#rg").mask("99.999.999-*");
            //Fim Mascara CPF
            //Inicio Mascara CPF
            //jQuery("#cpf").mask("999.999.999-99");
            //Fim Mascara CPF
        });
        (jQuery);/*/
       
       $(document).ready(function(){
       	  $('#btnlimpar').click(function(){
       	  	$('div').each(function(i){
       	  		alert(i);
       	  		$(this).css('background','red');
       	  	});
       	  });
       });
       
       
       $('#nome').click(function(){
        $this.css('background','#c2e9f1');
       })
       
       $('#btnlimpar').disable='True';
       
       
		</script>
		
	
	</head>
<div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3></span> Cadastrar Jaquetas</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("jaqueta/cadastrar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idJaqueta" name="idJaqueta" value="" class="form-control codigo" readonly="readonly"> 
        					<br>
        				   	<label for="nome">Jaqueta:</label>
        				   	<div class="input-group textos">
								<input type="text" id="jaqueta" style="width:260px"; name="jaqueta" value= "" class="form-control" placeholder="Nome Jaqueta" required autofocus >
							</div>
							<br>
        				   <label for="textos">Tecido:</label>
        				   <div class="input-group textos">
        				   	<input type="text" id="tecido" name="tecido" value= "" class="form-control" placeholder="Tecido" required  >
        				   </div>
        				   <br>
        				   <label for="textos">Valor:</label>
        				   <div class="input-group telefone">
        				   	<input type="text" id="Valor" name="valor" value= "" class="form-control" placeholder="Valor" required  >
        				   </div>
        				   <br>
        				   <label for="textos">Descrição:</label>
        				   <div class="input-group telefone">
        				   	<input type="text" id="descricao" name="descricao" value= "" class="form-control" placeholder="Descrição" required  >
        				   </div>
        				   <br>
        				    <label for="textos">Marca:</label>
        				   <div class="input-group telefone">
        				   <!--<input type="text" id="marca" name="marca" value= "" class="form-control" placeholder="Marca" required  >-->
        				   <select name="idMarca">
        				   	<?php 
        				   	foreach ($marca as $key) {
								   echo "<option value=\"$key->idMarca\">$key->marca</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br>
        				   <select name="idCor">
        				   	<?php 
        				   	foreach ($Cor as $key) {
								   echo "<option value=\"$key->idCor\">$key->cor</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <select name="idTamanho">
        				   	<?php 
        				   	foreach ($Tamanho as $key) {
								   echo "<option value=\"$key->idTamanho\">$key->tamanho</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br>
        				   <select name="idStatus">
        				   	<?php 
        				   	foreach ($Descricao as $key) {
								   echo "<option value=\"$key->idStatus\">$key->descricao</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br>
        				   </div>
        				   <br>
        				   
        				   <button type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <!--<button onclick="document.getElementById('op').value='update';" type="submit" class="btn btn-lg btn-primary" >Alterar</button>-->
        				   <button id="btnlimpar" type="reset" class="btn btn-lg btn-warning">Limpar</button>
        				</form>
        				<p><?php echo validation_errors(); ?> </p>
        				<p> </p>
        				
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Jaqueta</th>
        							<th>tecido</th>
        							<th>Valor</th>
        							<th>Descição</th>
        							<th>Marca</th>
        						</tr>
        					</thead>
        					 <tbody>
        					 	<?php 
                                foreach($jaqueta as $row):
                            ?>
								<tr>
									<td><?php echo $row->idJaqueta;?></a></td>
									<td><?php echo $row->jaqueta;?></td>
									<td><?php echo $row->tecido;?></td>
									<td><?php echo $row->valor;?></td>
									<td><?php echo $row->descricao;?></td>
									<td><?php echo $row->idMarca;?></td>
								</tr>
						     <?php 
                                endforeach;
                             ?>	
        				</table>
        				</div>
        		    </div>
        		</div>
	 	</div>
	 </div>