		<main>
			<form method="post" action="<?php echo Config::get('URL'); ?>color/addColor" >
				
				<!-- this is where all the color are created -->
				<section class="color-create-section" >

					<!-- this is the color selector (what do you want to change?) -->
					<p class="login-p" >Primary Color » </p><input type="button" onclick="" id="color-1" class="color-button" >
					<input type="button" onclick="" id="color-2" class="color-button" ><p class="login-p" > « Secondary Color</p><br>
					<p class="login-p" >Tint Color 1 » </p><input type="button" onclick="" id="color-3" class="color-button" >
					<input type="button" onclick="" id="color-4" class="color-button" ><p class="login-p" > « Tint Color 2</p><br>
					<p class="login-p" >Text Color » </p><input type="button" onclick="" id="color-5" class="color-button" >
					<input type="button" onclick="" id="color-6" class="color-button" ><p class="login-p" > « Background Color</p><br>

					<!-- this is where you can choose the ammount of red, green and blue -->
					<input type="range" id="color-bar-red" class="color-bar" value="255" min="0" max="255" ><br>
					<input type="range" id="color-bar-green" class="color-bar" value="255" min="0" max="255" ><br>
					<input type="range" id="color-bar-blue" class="color-bar" value="255" min="0" max="255" ><br>

					<!-- javascript saves all the data in this hidden input -->
					<input type="hidden" id="color-data" name="data" value="ffffff.ffffff.ffffff.ffffff.ffffff.ffffff" >
				</section>

				<?php View::renderWithoutHeaderAndFooter('color/sample'); ?>
				<input 
			</form>
		</main>