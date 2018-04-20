<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php"; 
         require('clases/conectar.php');
	 ?>
</head>
<body>
	<?php
      
  /* prueba de conecction
       $obj =new conectar();
       $result= $obj->sentencia("select * from persona");
       if($result){
       	echo "deu certo";
       }

 */
	  ?>
    <section class="jumbotron">
    <div class="container">
      <h1>Desafio FabricaInfo</h1>
      <p>Maykel Trejo</p>
    </div>
  </section>
  <div class="container">
   <div class="row">
      <div class="col-md-4" ></div> 
      <div class="col-md-4" >
      <div class="title"> Formulario </div> 
        <form class="form" role="form" method="post" action="" > 
        </form>
      </div>  
      <div class="col-md-4" ></div> 
  </div>

</body>
</html>
