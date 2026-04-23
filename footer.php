	<script>
	String.prototype.get = function(p) {
		var match = this.match(new RegExp('[?|&]?' + p + '=([^&]*)'));
		return match ? match[1] : false;
	};
	if (typeof JdOnLoad === 'function') { JdOnLoad(); }
	</script>

	</div>
	<?php
	$countries = (string)($_SESSION[$thisMap] ?? '');
	$countries = explode('#', $countries);
	foreach ($countries as $key) {
		if ($key !== '' && $key !== null) {
			echo '<script>var el=document.getElementById(' . json_encode($key) . '); if(el){el.checked=true;}</script>' . "\n";
		}
	}
	?>
	</body>
</html>
