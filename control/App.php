<?php
/**
 *
 */
class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  
  public function parseURL(){
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'],"/");
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/',$url);
      return $url;
    }
  }
  public function assetsLink(){
    $uri  = $this->parseURL();
    $assetLink = '';
    for ($i=0; $i <= count($uri) ; $i++) { 
      if (!empty($uri[$i])) {
        $assetLink = $assetLink."../";
      }else{
        $assetLink = $assetLink;
      }
    }
    return $assetLink;
  }

}
