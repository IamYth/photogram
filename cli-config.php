<?php


require_once 'vendor/autoload.php';


require_once 'vendor/laravel/framework/src/Illuminate/Foundation/helpers.php';


use Doctrine\ORM\Tools\Console\ConsoleRunner;


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$isDevMode = true;


(new Dotenv\Dotenv(__DIR__, '.env'))->load();


$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
    'dbname'   => env('DB_DATABASE', 'photogram')
);


$classLoader = new \Doctrine\Common\ClassLoader(null, __DIR__ . '/src/doctrine/entity');
$classLoader->register();


$paths = array(__DIR__ . '/src/doctrine/yaml');
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);


$entityManager = EntityManager::create($dbParams, $config);


return ConsoleRunner::createHelperSet($entityManager);


?>