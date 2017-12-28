<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<div class="row">
<br><br><br><br>
		<div class="col-md-8">
		<h1 align="center">Bienvenido al instituto de Música <sup><small><span class="label label-success">UAB</span></small></sup></h1>
		<hr><hr><br>
		<p class="lead"><b>Veransis <sup><small><span class="label label-success">UAB</span></small></sup></b> es una herramienta para profesores en la cual pueden gestionar sus grupos de clases, llevar el control de asistencia, control de comportamiento y las calificaciones de sus alumnos.</p>
		<div class="row">
		<div class="col-md-6">
		<h1 align="center"><sup><small><span class="label label-success">ALUMNOS</span></small></sup></h1>
		<p align="center" > Gestion de alumnos individuales, datos personales, datos del tutor.</p>
		</div>
		<div class="col-md-6">
		<h1 align="center"><sup><small><span class="label label-success">GRUPOS</span></small></sup></h1>
		<p align="center">Gestion de grupos, un mismo alumno puede estar en varios grupos.</p>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
		<h1 align="center"><sup><small><span class="label label-success">ASISTENCIA</span></small></sup></h1>
		<p align="center">Registra la asistencia de los alumnos: asistencias, faltas, retardos, justificaciones.</p>
		</div>
		<div class="col-md-6">
		<h1 align="center"><sup><small><span class="label label-success">COMPORTAMIENTO</span></small></sup></h1>
		<p align="center">Registra el comportamiento o conducta de los alumnos: buena, muy buena, mala, muy mala.</p>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
		<h1 align="center"><sup><small><span class="label label-success">CALIFICACIONES</span></small></sup></h1>
		<p align="center">Registra los bloques de calificaciones por grupos.</p>
		</div>
		<div class="col-md-6">
		<h1 align="center"><sup><small><span class="label label-success">REPORTES</span></small></sup></h1>
		<p align="center">Genra reportes listos para imprimir en formato Word.</p>
		</div>
		</div>
		</div>
    	<div class="col-md-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>
		 <br><br><br><br><br>
    		<div class="panel panel-success" style="background:#363838">
			
			  	<div class="panel-heading" style="background:#363838">
				  <center> 
                          <img style="margin-top: -100px" src="img/img1.png" width="30%" height="30%"> 
                  </center> 
			    	
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" required name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" required name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" style="background:#363838" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
				<br><br>
			<div class="panel panel-success" style="background:#363838">
			  	<div class="panel-heading" style="background:#363838">
			    	<h1 align="center" class="panel-title" style="color:#ffffff">Registro</h1>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?action=processregister">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Nombre" required name="name" type="text">
			    		</div>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Apellidos" required name="lastname" type="text">
			    		</div>

			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" required name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" required name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" style="background:#363838" value="Registrarme">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
<br><br><br>