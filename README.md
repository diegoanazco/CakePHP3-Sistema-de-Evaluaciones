# Sistema de Evaluaciones (SIEVAL)

El sistema de Evaluaciones intenta simular un repositorio de evaluaciones, exámenes, controles; que los profesores en un colegio o universidad realizan a sus estudiantes. Ha sido desarrollado con el Framework CakePHP 3.x
Explicaremos de forma general el funcionamiento de SIEVAL como guía a quien desee utilizar como template el siguiente sistema. 

## VIDEO - Funcionamiento de SIEVAL

Enlace video Youtube: https://youtu.be/Tpr1tX2rXs0

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
   * [Autores](#autores)
<!--te-->


## Modelo de Datos

El modelo base académico es propuesto por el profesor: **Richard Escobedo (Github: @rescobedoq)**. Pero para SIEVAL se agregaron las entidades que se encuentran de color verde. Presentamos el modelo de datos:

<a href="https://imgur.com/VVu5bZZ"><img src="https://i.imgur.com/VVu5bZZ.jpg" title="source: imgur.com" /></a>

### Registro de un usuario

Para el registro de usuario se implementaron dos nuevas funcionalidades: En el Controller y en Template Users.

#### Controller
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
#### Template
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

#### Controller
Se modifica el siguiente archivo: *root/src/Controller/UsersController.php*. Añadiendo las siguientes funciones:

##### Login
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
##### Logout
```
public function logout()
{
  $this->Flash->success('You are now logged out.');
  return $this->redirect($this->Auth->logout());
}
```
#### Template
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

#### Controller
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

#### Template
En los Template de Questions, tenemos que modificar: *add.ctp* y *edit.ctp* de la siguiente manera:

```
<!-- Eliminamos -->
<?= $this->Form->create($question) ?> 

<!-- Agregamos para tener un multipart/form-data -->
<?= $this->Form->create($questions_photo, ['type' => 'file']) ?>
```

Recordemos que tenemos que agregar la siguiente carpeta para poder guardar nuestras imágenes: */root/webroot/uploads/files*

## Internacionalización
Todo el código implementado ha sido realizado por nuestro profesor: **Richard Escobedo (Github: @rescobedoq)**

Para la internacionalización se utilizaron el idioma español y portugues. Para ello se tuvieron que modificar los siguientes archivos. 

#### Controller
Debido a que la internacionalización se realiza en todos los controller, necesitamos ubicarnos en el AppController, en la siguiente ruta: */root/src/Controller/AppController.php*

Agregamos las siguientes funciones:

```
public function changeLanguage($language=null)
{
	if($language!=null && in_array($language, ['en_US','es_PE','pt_BR']))
	{
		$this->request->session()->write('Config.language',$language);
		return $this->redirect($this->referer());
	}
	else
	{
		$this->request->session()->write('Config.language',I18n::locale());
		return $this->redirect($this->referer());
	}
}

public function beforeFilter(Event $event)
{
	$this->set('current_user',$this->Auth->user());
	if ($this->request->session()->check('Config.language'))
	{
		I18n::setLocale($this->request->session()->read('Config.language'));
	}
	else
	{
		$this->request->session()->write('Config.language',I18n::locale());
	}

}
```


#### Layout
Se modifica el Layout porque es donde tiene como plantilla el header de todo SIEVAL. Se encuentra en la siguiente ruta: */root/src/Template/Layout/default.ctp*

```
<div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <?= $this->fetch('tb_actions') ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">

		<li><?= $this->Html->image("icons/32/Peru-Flag-icon.png", [
			"alt" => "Español",
			'url' => ['controller' => 'App', 'action' => 'change-language', 'es_PE']
			]); ?></li>
		<li><?= $this->Html->image("icons/32/United-States-Flag-icon.png", [
			"alt" => "English",
			'url' => ['controller' => 'App', 'action' => 'change-language', 'en_US']
			]); ?></li>
		<li><?= $this->Html->image("icons/32/Brazil-Flag-icon.png", [
			"alt" => "Portugues",
			'url' => ['controller' => 'App', 'action' => 'change-language', 'pt_BR']
			]); ?></li>
                </ul>
            </div>
```
Recordemos que las imagenes se encuentran en la siguiente ruta, hay que crearla: */root/webroot/img/icons/32* 


## Bootstrap HTML5 CSS3 JQUERY

#### CRUD

Para la implementación del nuevo diseño del CRUD de nuestras entidades se utilizó el siguiente plugin: https://github.com/FriendsOfCake/bootstrap-ui

Después de su correcta instalación siguiendo los pasos que se especifican en el repositorio, recordemos algo importante. **Para que se aplique el plugin en nuestras entidades, debemos volver a realizar el bake all pero ahora con la siguiente sentencia**

```
sudo ./cake bake.bake all *Entidad* -t BootstrapUI

Ej. sudo ./cake bake.bake all Questions -t BootstrapUI
```
De igual manera, al implementar este plugin, nuestro */Template/Layout*, ahora se encuentra en la siguiente ruta: */root/src/Template/Layout/TwitterBootstrap/dashboard.ctp*

#### Login - Register

Para la implementación del nuevo diseño del Login y Register, se utilizó una plantilla gratuita de la siguiente página: https://colorlib.com/wp/cat/login-forms/

##### Adjuntando el css, fonts, vendor, js de la plantilla.
Para que se pueda utilizar los archivos que vienen con la plantilla, tenemos que añadirlos en nuestro webroot, en la siguiente ruta: */root/webroot/css/css*

De igual manera en nuestro archivos .ctp, tenemos que referencialos de la siguiente manera. 

Tenemos las siguientes sentencias en el código original de la plantilla.
```
	<!--<link rel="stylesheet" type="text/css" href="css/util.css">-->
	<!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
```
Se tienen que reemplazar con las siguientes sentencias para que el Framework CakePHP 3.x lo reconozca:
```
	<?= $this->Html->css('css/css/util.css') ?>
	<?= $this->Html->css('css/css/main.css') ?>
```

## Validación de datos
La validación de datos viene incluida con el Framework CakePHP 3.x, y de igual manera con el Plugin de Bootstrap que hemos instalado. Si queremos modificar de manera manual este tipo de validaciones tenemos que hacerlo en la siguiente ruta: */root/src/Model/Table/UsersTable.php*

```
public function validationDefault(Validator $validator)
{
$validator
    ->integer('users_id')
    ->allowEmptyString('users_id', null, 'create');

$validator
    ->scalar('users_name')
    ->maxLength('users_name', 150)
    ->requirePresence('users_name', 'create')
    ->notEmptyString('users_name');
}
```
Si queremos un mensaje por defecto, tendríamos que modificar la siguiente linea:
```
    ->notEmptyString('users_name', 'Mensaje propio');
```

## Envíos de email
Para la funcionalidad de envíos de Email se utilizó el siguiente tutorial: https://www.youtube.com/watch?v=cEwf9PpbMcQ&t=490s
De igual manera repasemos las funcionalidades más importantes para su correcto funcionamiento:

#### App Config.
En el AppConfig, tenemos que agregar nuestros correos que deseamos utilizar para el envio de los mismo, de la siguiente manera: */root/config/app.php*
```
    'EmailTransport' => [
        'default' => [
            'className' => MailTransport::class,
            /*
             * The following keys are used in SMTP transports:
             */
            'host' => 'localhost',
            'port' => 25,
            'timeout' => 30,
            'username' => null,
            'password' => null,
            'client' => null,
            'tls' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],

	'gmail' => [
		'className' => 'Smtp',
		'host' => 'ssl://smtp.gmail.com',
		'port' => 465,
		'timeout' => 30,
		'username' => 'emailpropio@gmail.com',
		'password' => 'passwordemail',
		'client' => null,
		'tls' => null,
		'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
	],
    ],
```
Y unas lineas más abajo se agrega las siguientes sentencias
```
    'Email' => [
        'default' => [
            'transport' => 'default',
            'from' => 'you@localhost',
            //'charset' => 'utf-8',
            //'headerCharset' => 'utf-8',
        ],

	'tutoriais' => [
		'transport' => 'gmail',
		'from' => ['emailpropio@gmail.com' => 'Mensaje'],
	],
    ],
```

#### Bake Mailer
El Framework CakePHP 3.x cuenta con una funcionalidad para el envio de correos, para ellos tenemos que realizar la siguiente sentencia: */root/bin*
```
	sudo ./cake bake mailer *Entidad*
	Ej. sudo ./cake bake mailer Users
```
Esta funcionalidad nos creara diferentes archivos, modificaremos el siguiente: */root/src/Mailer/UsersMailer.php*
```
public function welcome($users)
{
	$this->to($users->users_email)
	->profile('tutoriais')
	->emailFormat('html')
	->template('welcome_email_template')
	->layout('default')
	->viewVars(['nome' => $users->users_name])
	->subject(sprintf('Bienvenido, %s', $users->users_name));
}
```
Como vemos se agregó un template llamado: welcome_email_template. Este archivo lo creamos en: */root/src/Template/Email/html/welcome_email_template.ctp*
```
<h1> Bienvenido </h1>
<p>
	Este es un email de SIEVAL.

</p>
```

#### Controller
Finalmente agregaremos la funcionalidad en nuestro Controller: *root/src/Controller/UsersController.php*
```
public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
	   if ($this->Users->save($user)) {
		//Inicio - Función de Email
		$this->getMailer('Users')->send('welcome', [$user]);
		//Fin - Recordemos que el 'welcome' es el nombre de la función en: UsersMailer.php
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $degrees = $this->Users->Degrees->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'degrees'));
    }
```


## Funcionalidades por rol
En SIEVAL contamos con roles, un ejemplo que implementamos es para la entidad Test->Questions. Por lógica entendemos que un usuario con rol: ADMIN, puede crear y manipular el sistema a su antojo.

Sin embargo, un usuario con rol: ESTUDIANTE, no tendría que poder modificar o crear un examen, esas funciones tienen que estar habilitadas para el usuario con rol: DOCENTE. 

Estas funcionalidades por rol, lo implementamos en los siguientes archivos.

#### Otorgando control total. Rol: ADMIN
AppController, es el papá de todos los controladores, por lo que si le damos permisos al rol en este controlador, podrá controlar todo SIEVAL. 

En la siguiente ruta: */root/src/Controller/AppController.php*
```
public function isAuthorized($user)
{
	if(isset($user['roles_id']) and $user['roles_id'] === 7)
		return true;
	return false;
}
```

#### Otorgando control para exámenes. Rol: DOCENTE
En las siguientes rutas: */root/src/Controller/TestsController.php* - */root/src/Controller/QuestionsController.php* - */root/src/Controller/AnnexesController.php*
```
public function isAuthorized($user)
{
	if(isset($user['roles_id']) and $user['roles_id'] === 6)
		return true;
	return false;
}
```

## Autores

* **Diego Añazco** - *Estudiante Universidad La Salle / Arequipa-Perú* - https://github.com/diegoanazco
* **Richard Escobedo** - *Docente Universidad La Salle / Arequipa-Perú* - https://github.com/rescobedoq


