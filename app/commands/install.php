<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class install extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'app:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install App.';

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
        // Generate the Application Encryption key
        $this->call('key:generate');

        // Create the migrations table
        $this->call('migrate:install');

        // Run the Sentry Migrations
        $this->call('migrate', array('--package' => 'cartalyst/sentry'));

        // Run the Migrations
        $this->call('migrate');

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array(),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array(),
		);
	}

}
