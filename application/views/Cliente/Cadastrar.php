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
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Cliente</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="gerenciarClienteModel.php">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idCliente" name="idCliente" value="" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Nome:</label>
        				   	<div class="input-group textos">
								<input type="text" id="nome" name="nome" value= "" class="form-control" placeholder="Nome Cliente" required autofocus >
									<span class="glyphicon glyphicon-search input-group-addon btn" onclick="fBusca()"></span>
							</div>
        				   <label for="telefone">Telefone:</label>
        				   <div class="input-group telefone">
        				   	<span class="glyphicon glyphicon-earphone input-group-addon"> </span>	
        				   	<input type="tel" id="telefone" name="telefone" value= "" class="form-control" placeholder="Telefone" required  >
        				   <input type= "hidden" id="op" name="op" value="">
        				   </div>
        				   <br>
        				   <button onclick="document.getElementById('op').value='insert';" type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <button onclick="document.getElementById('op').value='update';" type="submit" class="btn btn-lg btn-primary" >Alterar</button>
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button>
        				</form>
        				<p> </p>
        				<p> </p>
        				
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Nome</th>
        							<th>Telefone</th>
        						</tr>
        					</thead>
        					 <tbody>
								<tr>
									<td><a href="gerenciarcliente.php?id="></a></td>
									<td></td>
									<td></td>
								</tr>
        				</table>
        				</div>
        		    </div>
        		</div>
	 	</div>
	 </div>