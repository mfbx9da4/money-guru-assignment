
<!DOCTYPE html>
<html lang="en">
<HEAD>
    <TITLE>Planos de Saúde - Compare os melhores preços</TITLE>
    <meta name="description" content="No comparador de preços do MinhaGRANA você pode encontrar o melhor preço de plano de saúde."/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="http://minhagrana.org/img/favicon.ico"/>
    

	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js"></script>
	
	<link href="js/skins/square/green.css" rel="stylesheet">
	<script src="js/jquery.icheck.min.js"></script>
	
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<link href="css/custom-theme/jquery-ui-1.10.3.custom.css" rel="stylesheet" media="screen">
	
	<script src="js/accounting.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<script src="js/site.js" type="text/javascript"></script>
	
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" />	
	<link rel="stylesheet" href="css/service-area.css" type="text/css" media="screen" />
	
	<script src="js/resultados.js" type="text/javascript"></script>
	<script src="js/jquery.form.min.js"></script>
	
</HEAD>
<BODY>
    <div class="container-fluid">
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="/"><img src="http://minhagrana.org/img/logo_minhagrana.png" alt="MinhaGrana"></a>
					<div class="nav-collapse collapse pull-right user-area">
						<ul class="nav">
							<li><a href="http://minhagrana.org/">Home</a></li>
							<li><a href="http://minhagrana.org/signin">Registre-se</a></li>
							<li><a href="http://minhagrana.org/signin">Login</a></li>
						</ul><!-- .nav -->
					</div><!-- .nav-collapse -->
					<input type="hidden" id="global-env" value="" />
					<input type="hidden" id="global-domain" value="http://dev.minhagrana.org" />
					<input type="hidden" id="global-profile-userId"					value="" />
					<input type="hidden" id="global-profile-name"					value="" />
					<input type="hidden" id="global-profile-email"					value="" />
					<input type="hidden" id="global-profile-photo"					value="" />
					<input type="hidden" id="global-profile-newsletter-enabled"	value="" />		 
				</div><!-- .container -->
			</div><!-- .navbar-inner -->
		</div><!-- .navbar .navbar-inverse -->

		<!-- Main Menu -->
		<div id="menuHeaderShared" class="menu-container">
			<table class="main-menu">				
				<tr>
					<td class='meu-bolso' ><a href='http://minhagrana.org/meu-bolso'>Meu Bolso</a></td>
					<td class='meu-seguro' ><a href='http://minhagrana.org/meu-seguro'>Meu Seguro</a></td>
					<td class='minha-casa' ><a href='http://minhagrana.org/minha-casa'>Minha Casa</a></td>
					<td class='meu-carro' ><a href='http://minhagrana.org/meu-carro'>Meu Carro</a></td>
					<td class='meu-credito' ><a href='http://minhagrana.org/meu-credito'>Meu Crédito</a></td>
					<td class='meu-telefone' ><a href='http://minhagrana.org/meu-telefone'>Meu Telefone</a></td>
					<td class='minhas-compras' ><a href='http://minhagrana.org/minhas-compras'>Minhas Compras</a></td>
					<td class='minhas-viagens' ><a href='http://minhagrana.org/minhas-viagens'>Minhas Viagens</a></td>
				</tr>	
			</table>
		</div>			
		<!-- #END# Main Menu -->
	</div><!-- .container-fluid -->

	<div class="container-fluid">
		<div class="menu-subtitle">
			<span style="color:#f69c26;">Planos de Saúde</span>	    
		</div>
		<hr style="width: 30%;margin: 0 auto;">

		<div class="row-fluid subhome">
			<div class="span2 compare-block">
				
				<div class="compare-head">
					Compare os Planos
				</div><!-- .compare-head  --> 

				<form id="filtersForm" method="GET" action="http://minhagrana.org/tool/health-insurance/search">
					<input type="hidden" name="userAge" id="userAge" value="33" />				
					<input type="hidden" name="idOccupation" id="idOccupation" value="133" />
					<input type="hidden" name="sortBy" id="sortBy" value="priceHealthPlan" />
					<input type="hidden" name="sortMode" id="sortMode" value="asc" />				
									
					<div class="filtros">
						<label><a href="#" class="all">Todos</a></label>
					</div><!-- .filtros  -->
					
					<div class="loader" id="filters-loader"></div>
					
					<div id="loadedFilters">			
					</div>
				</form>

			</div><!-- .compare-block  -->

			<div class="span10 relative">
				<div class="user-data-container">
					<input type="hidden" name="atuacao" id="atuacao" value="Engenheiro" />				
					<div class="user-data">Resultados para:</div>
					<div class="user-data">Idade: <br/><span >33</span> <span>anos</span></div>
					<div class="user-data">Atuação/Profissão<br/><span>Engenheiro</span></div>
					<div class="user-data">Dependentes<br/><span id=''>0</span></div>
					<div class="user-data"><a href="#userDataEditForm" id="editUserData" class="edit button">Editar</a></div>				
				</div>
				<div id="userDataEditForm" style="display: none;">
					<div class="span5">						
						<div id="loader">
							<div class="loader-container">
								<img src="img/ajax-loader.gif" /> <span> Carregando</span>
							</div>
						</div>          
              
						<form name="register" id="register" class="clearfix" action="index.php?p=resultado" method="post">
		
							<div class="filtercontent">
								<label for="atuacao">Atuação ou profissão</label>
								<input type="text" name="atuacao" id="atuacao" value="Engenheiro" />
								<input type="hidden" name="idOcupacao" id="idOcupacao" value="133" />                       
		
								<label for="idade">Sua idade</label>
								<input type="text" name="idade" id="idade" value="33"/> <span>anos</span>
		
								<label>Dependentes</label>
								<div class="radio-container">
									<input type="radio" name="tem_dependente" id="tem-dependente-sim" value="Sim" /> <label for="tem-dependente-sim">Sim</label> 
									<input type="radio" name="tem_dependente" id="tem-dependente-nao" value="Não" checked="checked"/> <label for="tem-dependente-nao">Não</label> 
								</div>
		
								<div id="dependentes-idades" >   
									<input type="hidden" name="num_dependentes" id="num_dependentes" value="0" />
									<label class="inline">Idade</label> 
																			<div class="dependente" id="dependente-1">                                             
											<span><span class="number">1</span>&ordm; dependente: </span>
											<input type="text" name="dependente[0]" class="dependente-idade number required" data-num="1"  maxlength="2" size="3" value="" />                                           
										</div>
										
											
									<a href="#" class="inline" id="mais-dependente">+ dependente</a>
								</div>
		
								<input type="submit" value="Atualizar" />
								<!--input type="button" id="bt-close" value="Cancelar" /-->
							</div>
						</form>
						<script>
$('#register').submit(function(event) {

	//http://stackoverflow.com/questions/9310112/why-am-i-seeing-an-origin-is-not-allowed-by-access-control-allow-origin-error

	var url = 'http://dev.moneyguru.com.br/tool/health-insurance/search';

	$.ajax({
		type: "GET",
		url: url,
		data: $("#register").serialize(),
		error: function(data) { console.log(data); },
		success: function(data) {
			console.log(data.result)
			var table = $('#compare');
			for (var i = 0; i < data.result.resultSize; i ++) {
				var result = data.result.results[i];
				var row = "";
				row += "<tr>"
				row += "<td>" + result.namHealthInsuranceCompany + "</td>"
				row += "<td>" + result.modeHealthPlan + "</td>"
				row += "<td>$R" + result.refundLimit.valueRefundLimit + "</td>"
				row += "<td>" + result.codAccomodationType + "</td>"
				row += "<td>" + result.namHealthPlan + "</td>"
				row += "<td>" + result.indQualityHealthInsuranceCompany + "</td>"
				row += "<td>" + result.priceHealthPlan + "</td>"
				row += "<td><button class='btn details'>Detalhes</button></td>"
				row += "</tr>"
				
				$('#searchResults').append($(row));

			}
		}

	});
	event.preventDefault();
	return false;
});

						</script>

					</div>
				</div>
				<table class="compare">
					<thead>
						<tr>
							<td class="filter-sort"><a href="#" data-sortby="healthInsuranceCompany" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Operadora</a></td>
							<td class="filter-sort"><a href="#" data-sortby="modeHealthPlan" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Modalidade</a></td>
							<td class="filter-sort"><a href="#" data-sortby="refundLimit" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Reembolso</a></td>
							<td class="filter-sort"><a href="#" data-sortby="accomodationType" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Acomodação</a></td>
							<td class="filter-sort"><a href="#" data-sortby="assistanceRegion" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Abrangência</a></td>
							<td class="filter-sort"><a href="#" data-sortby="ansEvaluation" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Aval. ANS*</a></td>						
							<td class="filter-sort asc"><a href="#" data-sortby="priceHealthPlan" data-sortmode="asc" title="Clique para ordernar ou inverter a ordem">Mensalidade</a></td>
							<td></td>
						</tr>
						
					</thead>
					<tbody id="searchResults">						
					</tbody>				
				</table><!-- .compare  -->
				<div id="results-loader" class="loader" > </div>				
				
				<div class="legenda">
					<div>
						<label> Legenda: </label> 
						<img src="img/aval.png" class="aval" /> <span>mais de 3 reclamações a cada 10.000</span> 
						<img src="img/aval.png" class="aval" /> <img src="img/aval.png" class="aval" /> <span>de 1 a 3 reclamações a cada 10.000</span> 
						<img src="img/aval.png" class="aval" /> <img src="img/aval.png" class="aval" /> <img src="img/aval.png" class="aval" /> <span>menos de 1 reclamação a cada 10.000</span> 
					</div>
					<div>
						<label>*Valor Mensal</label> <span>Planos podem ser coletivos por adesão, individuais ou para pequenas empresas. Preços e condições são estimados e devem ser confirmados com nossos corretores.</span>
					</div>
				</div><!-- .legenda  -->
			
			</div><!-- .span10  -->	
		</div><!-- .compare-block  -->
	</div><!-- .row-fluid  -->
</div> <!-- .container -->
<footer>
	<div id="Foot">
		<div class="Row">
			<div class="row-fluid">
				<div class="span6 footermark">
					<h6>
						<a href="/"><img src="img/moneymarca.png" alt="MinhaGrana"></a>
						<span>Copyright ©2013 MinhaGRANA. Todos os direitos são reservados.</span>
					</h6>		
				</div>
				<div class="span6 footerlinks">
						<a class="footerTextLinks" href="http://www.minhagrana.org/comunidade">Dúvidas frequentes</a>
						<span class="middleDot"> &middot; </span>			
						<a class="footerTextLinks" href="#">Política de Privacidade</a>
						<a href="#" onclick='javascript:window.open("https://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=Minhagrana&p%5Burl%5D=http://minhagrana.org","facebook-share-dialog","width=626,height=436");return false;'>
							<img src="img/face.png"></img>
						</a>
						<a href="https://plus.google.com/share?url=www.minhagrana.org" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<img src="img/Googlemais.png"></img>
						</a>
						<a href="http://twitter.com/intent/tweet?text=http://www.minhagrana.org" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<img src="img/Twitter.png"></img>
						</a>
				</div>
			</div>
		</div>
	</div>
</footer>
</BODY>
<link href="css/style.css" rel="stylesheet" media="screen"> 
</HTML>

