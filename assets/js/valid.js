function pruebaemail (valor){
	re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	if(!re.exec(valor)){
		alert('email no valido');
	}
	else alert('email valido');
	}
	
	function valida(campo){
			var bRet = false;
			if (campo.value == "mal todo mal")
				alert("Falta información");
			else  if(campo.value.length<5)
              alert("Bien ");
            else
			 bRet = true;
			
    	return bRet;
		}