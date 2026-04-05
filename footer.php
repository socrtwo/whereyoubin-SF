	<script type="text/javascript">
	String.prototype.get = function(p)
	{
    	return (match = this.match(new RegExp("[?|&]?" + p + "=([^&]*)"))) ? match[1] : false;
	}
	JdOnLoad()
	</script>


	</div>
	<?
	$countries = $_SESSION[$thisMap];
	$countries = explode('#',$countries);
	foreach($countries AS $key) 
	{
			if($key != null) 
			{
	?>
		<script>document.getElementById('<?php echo $key; ?>').checked=true;</script>
	<?
			}
	}
	?>
	</body>
</html>
