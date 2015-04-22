<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Application(); // Create the Silex application, in which all configuration is going to go
$app->register(new UrlGeneratorServiceProvider());
$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../templates', // The path to the templates, which is in our case points to /var/www/templates
));

$app['debug'] = true; // Debugging - remove in prod

return $app;

?>