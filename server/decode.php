<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

sv ='{"metodo":"getUser","usuario": {"idUsuario":"3"}}';
		$.ajax({
					type: "POST",
					url: "http://54.204.69.178/webservices.php",
					data: "solicitud="+ sv, 
					success: function(datos){
					console.log(datos);
				
				  }
			});

</script>
</head>
    
</html>
