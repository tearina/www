<?
	require_once 'php-activerecord/ActiveRecord.php';

	ActiveRecord\Config::initialize(function($cfg)
	{
	    $cfg->set_model_directory('models');
	    $cfg->set_connections(array(
	        'development' => 'mysql://root@localhost/test')
	    );
	});

	$att = Attainment::create(array('name' => '12345', 'desc' => '54321'));
	$att->save();
	# create Tito
	$user = User::create(array('login' => 'Tito', 'pass' => 'VA'));
	 
	# update Tito
	$user->login = 'Tito Jr';
	$user->save();
?>