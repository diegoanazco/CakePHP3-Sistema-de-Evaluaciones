# Sistema de Evaluaciones (SIEVAL)

El sistema de Evaluaciones intenta simular un repositorio de evaluaciones, exámenes, controles; que los profesores en un colegio o universidad realizan a sus estudiantes. Ha sido desarrollado con el Framework CakePHP 3.x
Explicaremos de forma general el funcionamiento de SIEVAL como guía a quien desee utilizar como template el siguiente sistema. 

## Índice de Contenido

<!--ts-->
   * [Modelo de datos](#modelo-de-datos)
   * [Registro de un usuario](#registro-de-un-usuario)
   * [Login](#login)
   * [CRUD de tablas](#crud-de-tablas)
   * [Subir archivos](#subir-archivos)
   * [Internacionalización](#internacionalización)
   * [Bootstrap HTML5 CSS3 JQUERY](#bootstrap-html5-css3-jquery)
   * [Validación de datos](#validación-de-datos)
   * [Envíos de email](#envíos-de-email)
   * [Funcionalidades por rol](#funcionalidades-por-rol)
<!--te-->


## Modelo de Datos

El modelo base académico es propuesto por el profesor: **Richard Escobedo (Github: @rescobedoq)**. Pero para SIEVAL se agregaron las entidades que se encuentran de color verde. Presentamos el modelo de datos:

<a href="https://imgur.com/VVu5bZZ"><img src="https://i.imgur.com/VVu5bZZ.jpg" title="source: imgur.com" /></a>

## Registro de un usuario

Para el registro de usuario se implementaron dos nuevas funcionalidades: En el Controller y en Template Users.

### Controller
Se modifica el siguiente archivo: *root/src/Controller/UsersController.php*. Añadiendo la siguiente función:
```
public function register()
{
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
        if ($this->Users->save($user)) {
                $this->getMailer('Users')->send('welcome', [$user]);
                $this->Flash->success(__('You are register and can login.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('You are not register. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list')->where(['Roles.roles_id !=' => 3]);
        $degrees = $this->Users->Degrees->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'degrees'));

}
```
### Template
Se crea el siguiente archivo: *root/src/Template/Users/register.ctp*. Se utiliza la misma plantilla del Login, pero en el Body, se crea el formulario de la siguiente forma:
```
<div class="limiter">
		<div class="container-login100" style="background-image: url('/root/css/css/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?= $this->Form->create($user); ?>
					<span class="login100-form-title p-b-49">
						Register Sieval
					</span>
				    <?php
				    echo $this->Form->control('roles_id',   ['default' =>  3]);
				    echo $this->Form->control('degrees_id', ['default' =>  4]);
				    echo $this->Form->control('users_name');
				    echo $this->Form->control('users_fathersurname');
				    echo $this->Form->control('users_mothersurname');
				    echo $this->Form->control('users_email');
				    echo $this->Form->control('users_password',["type" => "password"]);
				    echo $this->Form->control('users_birthday');
				    echo $this->Form->control('users_cellphone');
				    echo $this->Form->control('users_status');
				    ?>
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" class="login100-form-btn">
								Register
							</button>
					</div>	
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>

```
## Login

La funcionalidad de Login fue implementada siguiendo la documentación del Framework CakePHP 3.x: https://book.cakephp.org/3/en/tutorials-and-examples/cms/authentication.html

Nuevamente necesitamos modificar dos archivos: Controller y Template Users.

### Controller
Se modifica el siguiente archivo: *root/src/Controller/UsersController.php*. Añadiendo las siguientes funciones:

#### Login
```
public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('Your username or password is incorrect.');
    }
}
```
#### Logout
```
public function logout()
{
  $this->Flash->success('You are now logged out.');
  return $this->redirect($this->Auth->logout());
}
```
### Template
Se crea el siguiente archivo: *root/src/Template/Users/login.ctp*. Se utiliza la misma plantilla del Login, pero en el Body, se crea el formulario de la siguiente forma:
```
<div class="limiter">
		<div class="container-login100" style="background-image: url('/root/css/css/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?= $this->Form->create(null,['class'=>'login100-form']) ?>
				<span class="login100-form-title p-b-49">
					Login Sieval
				</span>
					<?= $this->Form->control('users_email', ['class'=>'input100','placeholder' => 'Type your Email','label' => ['class' => 'label-input100'], "type" => "email"], ['templateVars' => ['help' => 'At least 8 characters long.']] ) ?>
					<?= $this->Form->control('users_password', ['class' => 'input100','placeholder' => 'Type your Password', 'label' => ['class' => 'label-input100'], "type" => "password"] ) ?>
					
				<br></br>
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
				</div>	
				<div class="text-right p-t-8 p-b-31">
					<a>
						<?= $this->Html->link('or Register Here', ['controller' => 'users', 'action' => 'register']); ?>
					</a>
				</div>


				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>

```
## CRUD de tablas
El CRUD se puede implementar de manera muy sencilla gracias al Framework CakePHP 3.x
Para ello nos dirigimos a la siguiente ruta: */root/bin* y ejecutamos la siguiente sentencia para cada una de nuestras entidades:
```
sudo ./cake bake all *Entidad*

Ej. sudo ./cake bake all Users
```
Gracias a esta sentencia se crean automáticamente el: Model, Template y Controller de la entidad.
Podemos seguir la documentación: https://book.cakephp.org/3/en/tutorials-and-examples/cms/tags-and-users.html

## Subir archivos
Para poder subir archivos seguimos el siguiente tutorial: http://www.qualitians.com/file-upload-in-cakephp-3-using-cake-bake/ 
En SIEVAL lo implementamos en la entidad: Questions. Explicaremos los aspectos más importantes para realizar esta funcionalidad.

### Controller
En el controller de Questions en la función **add()** agregaremos lo siguiente (se detalla con un comentario):
```
public function add()
    {
        $question = $this->Questions->newEntity();
        if ($this->request->is('post')) {
        //Inicio - Código para poder subir archivos
        if(!empty($this->request->data['questions_photo']['name']))
        {
            $fileName = $this->request->data['questions_photo']['name'];
            $uploadPath = 'uploads/files/';
            $uploadFile = $uploadPath.$fileName;
            if(move_uploaded_file($this->request->data['questions_photo']['tmp_name'],$uploadFile))
            {
	        $this->request->data['questions_photo'] = $uploadFile;
            }
        }
        //Fin

            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $tests = $this->Questions->Tests->find('list', ['limit' => 200]);
        $this->set(compact('question', 'tests'));
    }
```

### Template
En los Template de Questions, tenemos que modificar: *add.ctp* y *edit.ctp* de la siguiente manera:

```
<!-- Eliminamos -->
<?= $this->Form->create($question) ?> 

<!-- Agregamos para tener un multipart/form-data -->
<?= $this->Form->create($questions_photo, ['type' => 'file']) ?>
```

Recordemos que tenemos que agregar la siguiente carpeta para poder guardar nuestras imágenes: */root/webroot/uploads/files*

## Internacionalización

Add additional notes about how to deploy this on a live system

## Bootstrap HTML5 CSS3 JQUERY

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Validación de datos

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Envíos de email

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Funcionalidades por rol

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.
