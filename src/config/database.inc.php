<?php
namespace PH7\Learnphp\config;
use PH7\Learnphp\config;
use RedBeanPHP\R;

$dsn = sprintf("mysql:host=%s;dbname=%s", $_ENV['DB_HOST'], $_ENV['DB_NAME']);
R::setup($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);

$currentEnvironment = Environment::tryfrom($_ENV['ENVIRONMENT']);
if($currentEnvironment?->environmentName() !== Environment::DEVELOPMENT->value) {
    R::freeze(true);
}