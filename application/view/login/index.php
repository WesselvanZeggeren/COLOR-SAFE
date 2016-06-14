		<main>
			<section class="login-section login-section-login">
				<h2 class="login-title login-title-login">Login</h2>
				<form method="post" action="<?php echo Config::get('URL'); ?>login/login" >
					<input type="text" name="user_name" placeholder="Your username or email" class="login-input" required ><br>
                    <input type="password" name="user_password" placeholder="Your password" class="login-input" required ><br>
                    <label for="set_remember_me_cookie" class="login-input-label" ><br>
                        <input type="checkbox" name="set_remember_me_cookie" class="login-input-checkbox" >
                        Remember me for 2 weeks
                    </label><br>
                    <?php if (empty($this->redirect)) { ?>
                    	<input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" ></input>
                    <?php } ?>
                    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" >
                    <input type="submit" value="Log in" class="login-input-submit">
				</form>
			</section><br>
			<section class="login-section login-section-register">
				<h2 class="login-title login-title-register">
					Retarded enough to forget both the password of this site and your mail?<br>
					Way to popular to use your original account?<br>
					or you just want to make a new one?<br>
					You've come to the right place make your ( new ) account here!
				</h2>
				<a href="<?php echo Config::get('URL'); ?>register/index" ><button class="login-button">sign up now!</button></a>
			</section>
		</main>