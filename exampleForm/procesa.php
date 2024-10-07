<html>
<body>

Welcome <?php echo $_GET["vNome"]; ?><br>
Your email address is: <?php echo $_GET["vEmail"]; ?>
<form action="procesaSeg.php" method="GET">
			Name: <input type="text" name="vNome" /><br />
			E-mail: <input type="text" name="vEmail" /><br />
			<input type="submit" />
		</form>
</form>
</body>
</html>
