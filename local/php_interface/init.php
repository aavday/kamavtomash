<?
$nameServer = $_SERVER['HTTP_HOST'];
$GLOBALS['city'] = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/local/city/' . $nameServer . '.ini', true);

if (!$GLOBALS['city']) {
  switch ($_SERVER['HTTP_HOST']) {
    default:
      header('HTTP/1.1 403 Forbidden');
      exit;
  }
}

function convertMetaTags()
{
  global $APPLICATION;

  $meta_tags = array(
    'title' => $APPLICATION->GetProperty('title'),
    'description' => $APPLICATION->GetProperty('description'),
    'keywords' => $APPLICATION->GetProperty('keywords'),
  );


  foreach ($meta_tags as &$meta_tag) {
    preg_match_all('/{{ ([a-z0-9-]+) }}/', $meta_tag, $matches);
    if ($matches[1]) {
      foreach ($matches[1] as $value) {
        $meta_tag = str_replace('{{ ' . $value . ' }}', $GLOBALS['city'][$value], $meta_tag);
      }
    }
  }

  $APPLICATION->SetPageProperty('title', $meta_tags['title']);
  $APPLICATION->SetPageProperty('description', $meta_tags['description']);
  $APPLICATION->SetPageProperty('keywords', $meta_tags['keywords']);
}

class DEBUG
{
  public function degug($getARRAY)
  {
    echo '<pre>';
    print_r($getARRAY);
    echo '</pre>';
  }
}

class translit
{
  public function cleanPHONE($string)
  {
    $converter = array(
      '(' => '',
      ')' => '',
      ' ' => '',
      '-' => ''
    );
    return strtr($string, $converter);
  }
}

class templENGINE
{
  public function convert($string)
  {
    preg_match_all('/{{ ([a-z0-9-]+) }}/', $string, $matches);

    if ($matches[1]) {
      foreach ($matches[1] as $value) {
        if ($GLOBALS["city"][$value]) {
          $string = str_replace('{{ ' . $value . ' }}', $GLOBALS["city"][$value], $string);
        }
      }
    }
    return $string;
  }
}
?>