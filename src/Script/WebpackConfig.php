<?php
namespace Starbug\Webpack\Script;

use Starbug\Webpack\Service\WebpackConfiguration;

class WebpackConfig {
  protected WebpackConfiguration $webpack;
  protected string $base_directory;
  public function __construct(WebpackConfiguration $webpack, $base_directory) {
    $this->webpack = $webpack;
    $this->base_directory = $base_directory;
  }
  public function __invoke() {
    if (!file_exists($this->base_directory."/var/etc")) {
      passthru("mkdir ".$this->base_directory."/var/etc");
    }
    file_put_contents($this->base_directory."/var/etc/webpack.config.js", $this->webpack->getWebpackConfig());
  }
}
