<?php include ('templates/head.php'); ?>


<div class="container spacing-top ">
	<div class="row">
		<div class="col-6 bg-dark">

			<center>
				<h1 class="title-h1">DRUMS SHOP</h1>
				<figure class="figure">
					<img  src="http://localhost/webmail/public/images/email.png" class="img-email">
				</figure>
			</center>

		</div>
		<div class="col-6 bg-warning">
			<fieldset>
					<legend>Formulario de Registro</legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/registroController.php">
							<p>
								<select name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" name="password" placeholder="Contraseña.." pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			                     onchange="this.setCustomValidty(this.validity.patternMismatch ? 'Debe contener entre 8 y 
			                     16 caracteres: (Digitos, minusculas, mayusculas, y simbolos)' : ''); if(this.
			                     checkValidity()) form.confirm_password.pattern = this.value;" required>
							</p>
							<p>
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.."pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[
                                 a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por 
                                 favor, ingresa la misma contraseña de arriba' : '');" required>
							</p>
							<p>
								<input type="submit" name="btn-register" value="Registrar usuario">
								<input type="reset" value="Limpiar datos">
							</p>
						</form>
			</fieldset>
			<p><a href="http://localhost/webmail/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
		</div>
	</div>
</div>
</div>

<?php include ('templates/foot.php'); ?>