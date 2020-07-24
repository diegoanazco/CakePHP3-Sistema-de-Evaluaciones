<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Users mailer.
 */
class UsersMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Users';

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
}
