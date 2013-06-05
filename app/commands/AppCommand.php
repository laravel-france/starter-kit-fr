<?php

# Traduction Laravel-france
# Maj:6/05/2013 - error.php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AppCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var	string
	 */
	protected $name = 'app:install';

	/**
	 * The console command description.
	 *
	 * @var	string
	 */
	protected $description = '';

	/**
	 * Holds the user information.
	 *
	 * @var array
	 */
	protected $userData = array(
		'first_name' => null,
		'last_name'  => null,
		'email'      => null,
		'password'   => null
	);

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$this->comment('=====================================');
		$this->comment('');
		$this->info('  Etape 1');
		$this->comment('');
		$this->info('    Merci de suivre les instructions');
		$this->info('    ci-dessous pour creer votre ');
		$this->info('    utilisateur principal.');
		$this->comment('');
		$this->comment('-------------------------------------');
		$this->comment('');


		// Let's ask the user some questions, shall we?
		$this->askUserFirstName();
		$this->askUserLastName();
		$this->askUserEmail();
		$this->askUserPassword();


		$this->comment('');
		$this->comment('');
		$this->comment('=====================================');
		$this->comment('');
		$this->info('  Etape 2');
		$this->comment('');
		$this->info("    Preparation de votre application");
		$this->comment('');
		$this->comment('-------------------------------------');
		$this->comment('');

		// Generate the Application Encryption key
		$this->call('key:generate');

		// Create the migrations table
		$this->call('migrate:install');

		// Run the Sentry Migrations
		$this->call('migrate', array('--package' => 'cartalyst/sentry'));

		// Run the Migrations
		$this->call('migrate');

		// Create the default user and default groups.
		$this->sentryRunner();

		// Seed the tables with dummy data
		$this->call('db:seed');
	}

	/**
	 * Asks the user for the first name.
	 *
	 * @return void
	 * @todo   Use the Laravel Validator
	 */
	protected function askUserFirstName()
	{
		do
		{
			// Ask the user to input the first name
			$first_name = $this->ask('Veuillez saisir votre prenom : ');

			// Check if the first name is valid
			if ($first_name == '')
			{
				// Return an error message
				$this->error('Prenom invalide - merci de recommencer.');
			}

			// Store the user first name
			$this->userData['first_name'] = $first_name;
		}
		while( ! $first_name);
	}

	/**
	 * Asks the user for the last name.
	 *
	 * @return void
	 * @todo   Use the Laravel Validator
	 */
	protected function askUserLastName()
	{
		do
		{
			// Ask the user to input the last name
			$last_name = $this->ask('Veuillez saisir votre nom : ');

			// Check if the last name is valid.
			if ($last_name == '')
			{
				// Return an error message
				$this->error('Nom invalide - merci de recommencer.');
			}

			// Store the user last name
			$this->userData['last_name'] = $last_name;
		}
		while( ! $last_name);
	}

	/**
	 * Asks the user for the user email address.
	 *
	 * @return void
	 * @todo   Use the Laravel Validator
	 */
	protected function askUserEmail()
	{
		do
		{
			// Ask the user to input the email address
			$email = $this->ask('Veuillez saisir votre email : ');

			// Check if email is valid
			if ($email == '')
			{
				// Return an error message
				$this->error('Email invalide - merci de recommencer.');
			}

			// Store the email address
			$this->userData['email'] = $email;
		}
		while ( ! $email);
	}

	/**
	 * Asks the user for the user password.
	 *
	 * @return void
	 * @todo   Use the Laravel Validator
	 */
	protected function askUserPassword()
	{
		do
		{
			// Ask the user to input the user password
			$password = $this->ask("Veuillez saisir votre mot de passe de l'utilisateur : ");

			// Check if email is valid
			if ($password == '')
			{
				// Return an error message
				$this->error('Le mot de passe est invalide - merci de recommencer.');
			}

			// Store the password
			$this->userData['password'] = $password;
		}
		while( ! $password);
	}

	/**
	 * Runs all the necessary Sentry commands.
	 *
	 * @return void
	 */
	protected function sentryRunner()
	{
		// Create the default groups
		$this->sentryCreateDefaultGroups();

		// Create the user
		$this->sentryCreateUser();

		// Create dummy user
		$this->sentryCreateDummyUser();
	}

	/**
	 * Creates the default groups.
	 *
	 * @return void
	 */
	protected function sentryCreateDefaultGroups()
	{
		try
		{
			// Create the admin group
			$group = Sentry::getGroupProvider()->create(array(
				'name'        => 'Admin',
				'permissions' => array(
					'admin' => 1,
					'users' => 1
				)
			));

			// Show the success message.
			$this->comment('');
			$this->info('Le group "Admin" a ete cree.');
		}
		catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		{
			$this->error('Le groupe existe deja.');
		}
	}

	/**
	 * Create the user and associates the admin group to that user.
	 *
	 * @return void
	 */
	protected function sentryCreateUser()
	{
		// Prepare the user data array.
		$data = array_merge($this->userData, array(
			'activated'   => 1,
			'permissions' => array(
				'admin' => 1,
				'user'  => 1,
			),
		));

		// Create the user
		$user = Sentry::getUserProvider()->create($data);

		// Associate the Admin group to this user
		$group = Sentry::getGroupProvider()->findById(1);
		$user->addGroup($group);

		// Show the success message
		$this->comment('');
		$this->info("L'utilisateur a ete cree.");
		$this->comment('');
	}

	/**
	 * Create a dummy user.
	 *
	 * @return void
	 */
	protected function sentryCreateDummyUser()
	{
		// Prepare the user data array.
		$data = array(
			'first_name' => 'John',
			'last_name'  => 'Doe',
			'email'      => 'john.doe@example.com',
			'password'   => 'johndoe',
			'activated'  => 1,
		);

		// Create the user
		Sentry::getUserProvider()->create($data);
	}

}
