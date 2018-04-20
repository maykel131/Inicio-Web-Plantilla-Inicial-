
<script type="text/javascript">
	$(document).ready(function(){
	});
</script>


consulta inner
 $sql="SELECT * FROM categoria INNER JOIN nota ON categoria.id = nota.id_cate";


update
$sql="UPDATE persona set nombre='$n', apellido='$a',  telefono='$t', sexo='$s',correo='$c'  where id =$ide ";






 Asi se ejecuta el codigo en AJAX

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});
			return false;
		});
	});
</script>
 este es el controller del ajax
<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$password=sha1($_POST['password']);
	$sql="INSERT into usuarios (nombre,apellido,usuario,password)
			values ('$nombre','$apellido','$usuario','$password')";
	echo mysqli_query($conexion,$sql);
 
 ?>
