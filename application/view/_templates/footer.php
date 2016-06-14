		<footer>
			<p class="footer-text" >this website was made by: Wessel van Zeggeren | <a href="https://github.com/WesselvanZeggeren" >https://github.com/WesselvanZeggeren</a></p>
			<p class="footer-text" >also check some of these cool websites</p>
			<a href="http://www.dbkillzone.com/" >http://www.dbkillzone.com/</a>
		</footer>
		<script src="<?php echo Config::get('URL'); ?>javascript/color.js" type="text/javascript" ></script>
		<?php if (Session::userIsLoggedIn()) { ?>
			<script src="<?php echo Config::get('URL'); ?>javascript/script.js" type="text/javascript" ></script>
			<input type="hidden" onload="functionjs();" id="PATH_AVATARS" value="<?php echo Config::get('PATH_AVATARS'); ?>" >
		<?php } ?>
	</body>
</html>