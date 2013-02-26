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
				<div class="whead"><h6>Editar produto: {{ produto.NomeProduto }}</h6></div>
				<div class="formRow">
					<div class="grid3"><label>Nome Produto:</label></div>
					<div class="grid9"><input type="text" class="maskDate" id="maskDate" value="value"><span class="note">99/99/9999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Phone:</label></div>
					<div class="grid9"><input type="text" class="maskPhone" value=""><span class="note">(999) 999-9999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Phone + Ext:</label></div>
					<div class="grid9"><input type="text" class="maskPhoneExt" value=""><span class="note">(999) 999-9999? x99999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Int'l Phone:</label></div>
					<div class="grid9"><input type="text" class="maskIntPhone" value=""><span class="note">+33 999 999 999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Tax ID:</label></div>
					<div class="grid9"><input type="text" class="maskTin" value=""><span class="note">99-9999999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>SSN:</label></div>
					<div class="grid9"><input type="text" class="maskSsn"><span class="note">999-99-9999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Product Key:</label></div>
					<div class="grid9"><input type="text" class="maskProd"><span class="note">a*-999-a999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Eye Script:</label></div>
					<div class="grid9"><input type="text" class="maskEye"><span class="note">~9.99 ~9.99 999</span></div>
				</div>
				<div class="formRow">
					<div class="grid3"><label>Purchase Order:</label></div>
					<div class="grid9"><input type="text" class="maskPo" value=""><span class="note">aaa-999-***</span></div>
				</div>
				<div class="formRow noBorderB">
					<div class="grid3"><label>Percent:</label></div>
					<div class="grid9"><input type="text" class="maskPct" value=""><span class="note">99%</span></div>
				</div>
			</div>
			<div id="unmask"></div>
		</fieldset>

{{> FooterPainel }}