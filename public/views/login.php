<?php

?>
<script type="text/javascript" src="../../assets/js/valid.js"></script>
<link rel="stylesheet" type="text/css" href="../../assets/css/styleLogin.css">
<body id="imagen">
	
	<section>
		
		<form>
		<div id="caja">
		<div id="icon"></div>	 
			<h1>Iniciar Sesión</h1>
			<input type="text" name="nombre" placeholder="Nombre">
			<input type="text" name="correo" placeholder="Correo">
			<input type="submit" onClick="pruebaemail(correo.value) || valida(nombre.value);"value="Iniciar" >
			<div id="inferior">
				<h3>¿No tienes cuenta? <a href="Registro.html"> Crear una</a> </h3>
		     </div>
		</div>
	</form>
	</section>
</body>