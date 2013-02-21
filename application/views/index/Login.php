{{> HeaderLogin}}

<!-- Current user form -->
<form action="index.html" id="login">
	<div class="loginPic">
		<a href="#" title=""><img src="images/userLogin.png" alt="" /></a>
		<span>Eugene Kopyov</span>
		<div class="loginActions">
			<div><a href="#" title="Change user" class="logleft flip"></a></div>
			<div><a href="#" title="Forgot password?" class="logright"></a></div>
		</div>
	</div>

	<input type="text" name="login" placeholder="Confirm your email" class="loginEmail" />
	<input type="password" name="password" placeholder="Password" class="loginPassword" />

	<div class="logControl">
		<div class="memory"><input type="checkbox" checked="checked" class="check" id="remember1" /><label for="remember1">Remember me</label></div>
		<input type="submit" name="submit" value="Login" class="buttonM bBlue" />
	</div>
</form>

<!-- New user form -->
<form action="index.html" id="recover">
	<div class="loginPic">
		<a href="#" title=""><img src="images/userLogin2.png" alt="" /></a>
		<div class="loginActions">
			<div><a href="#" title="" class="logback flip"></a></div>
			<div><a href="#" title="Forgot password?" class="logright"></a></div>
		</div>
	</div>

	<input type="text" name="login" placeholder="Your username" class="loginUsername" />
	<input type="password" name="password" placeholder="Password" class="loginPassword" />

	<div class="logControl">
		<div class="memory"><input type="checkbox" checked="checked" class="check" id="remember2" /><label for="remember2">Remember me</label></div>
		<input type="submit" name="submit" value="Login" class="buttonM bBlue" />
	</div>
</form>

{{> FooterLogin}}