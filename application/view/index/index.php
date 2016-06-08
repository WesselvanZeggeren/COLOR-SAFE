		<main>
			<ul class="home-button-box">
				<li><a href="<?php echo Config::get('URL'); ?>" ><button class="home-button home-button-1">Browse</button></a></li><br>
				<li><a href="<?php echo Config::get('URL'); ?>top/index" ><button class="home-button home-button-2">Top</button></a></li>
				<li><a href="<?php echo Config::get('URL'); ?>create.index" ><button class="home-button home-button-3">Create</button></a></li>
				<?php if (Session::userIsLoggedIn()) { ?>
					<li><a href="<?php echo Config::get('URL'); ?>my-colors/index" ><button class="home-button home-button-4">My Colors</button></a></li>
					<li><a href="<?php echo Config::get('URL'); ?>my-profile/index" ><button class="home-button home-button-5">My Profile</button></a></li>
				<?php } else { ?>
					<li><a href="<?php echo Config::get('URL'); ?>login/index" ><button class="home-button home-button-6">Log In</button></a></li>
					<li><a href="<?php echo Config::get('URL'); ?>register/index" ><button class="home-button home-button-7">Register</button></a></li>
				<?php } ?>
			</ul>
 		</main>