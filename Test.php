<?php

//装饰器模式
class Decorate
{
  public $content;
  function __construct($content)
  {
    $this->content = $content;

  }
  public function set()
  {
    return $this->content;
  }
}

class Art extends Decorate
{
  public $art;
  function __construct($art)
  {
    $this->art = $art;
  }
  public function art()
  {
    return $this->art->set();
  }
}
class SeoArc extends Art
{

  public function set()
  {
    echo $this->art->content. 'seo优化';
  }
}
class Ad extends Art
{

  public function set()
  {
    echo $this->art->content. '广告';
  }
}
$ar = new Decorate('这是一个描述');
echo $ar->content;
$ar = new SeoArc($ar);
echo "</br>";
echo $ar->set();
echo "</br>";
$ar = new Ad($ar);
echo $ar->set();
