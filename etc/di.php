<?php
namespace Starbug\Webpack;

use function DI\autowire;
use function DI\get;
use Starbug\Webpack\Script\WebpackConfig;

return [
  WebpackConfig::class => autowire()
    ->constructorParameter('base_directory', get('base_directory')),
  "scripts.webpack-config" => WebpackConfig::class
];
