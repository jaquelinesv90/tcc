{{> HeaderPainel}}

{{> SidebarProduto}}

<!-- Content begins -->
<div id="content">
	<div class="contentTop">
		<span class="pageTitle"><span class="icon-screen"></span>{{ content.title }}</span>
		<ul class="quickStats">
			<li>
				<a href="" class="blueImg"><img src="{{ template.paths.images }}/icons/quickstats/plus.png" alt="" /></a>
				<div class="floatR"><strong class="blue">5489</strong><span>visits</span></div>
			</li>
			<li>
				<a href="" class="redImg"><img src="{{ template.paths.images }}/icons/quickstats/user.png" alt="" /></a>
				<div class="floatR"><strong class="blue">4658</strong><span>users</span></div>
			</li>
			<li>
				<a href="" class="greenImg"><img src="{{ template.paths.images }}/icons/quickstats/money.png" alt="" /></a>
				<div class="floatR"><strong class="blue">1289</strong><span>orders</span></div>
			</li>
		</ul>
	</div>

	<!-- Breadcrumbs line -->
	<div class="breadLine"></div>

	<!-- Main content -->
	<div class="wrapper">

		<fieldset>
			<div class="widget fluid">
				<div class="whead"><h6>{{ content.title }}</h6></div>
				<form method="post" action="/produto">
					<div class="formRow">
						<div class="grid3"><label>Nome Produto:</label></div>
						<div class="grid9"><input type="text" id="nomeProduto" name="NomeProduto" ><span class="note">O nome para seu produto</span></div>
					</div>
					<div class="formRow">
						<div class="grid3"><label>Valor de Venda do Produto:</label></div>
						<div class="grid9"><input type="text" id="valorProduto" name="ValorVendaProduto" ><span class="note">O nome para seu produto</span></div>
					</div>
					<div class="formRow">
						<div class="grid3"><label>Codigo de Barras:</label></div>
						<div class="grid9"><input type="text" id="codigoBarras" name="CodigoBarrasProduto" ><span class="note">O nome para seu produto</span></div>
					</div>
					<div class="formRow">
						<div class="grid3"><label>Descricao do Produto:</label></div>
						<div class="grid9"><input type="text" id="DescricaoProduto" name="descProduto" ><span class="note">O nome para seu produto</span></div>
					</div>
					<div class="formRow">
						<div class="grid3"><label>Categoria:</label></div>
						<div class="grid9">
							<select name="IDCategoria">
								{{#categorias}}
									<option value="{{IDCategoria}}">{{NomeCategoria}}</option>
								{{/categorias}}
							</select>
						</div>
					</div>
					<div class="formRow">
						<div class="grid3"><label>Unidade:</label></div>
						<div class="grid9">
							<select name="IDUnidade">
								{{#unidades}}
									<option value="{{IDUnidade}}">{{TipoUnidade}}</option>
								{{/unidades}}
							</select>
						</div>
					</div>
					<div class="formRow noBorderB"><input type="submit" value="Cadastrar Produto" class="buttonM bBlack formSubmit"></div>
				</form>
			</div>
			<div id="unmask"></div>
		</fieldset>


{{> FooterPainel}}