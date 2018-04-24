<pre>
<?php

require_once(__DIR__ . '\Autoload.php');

spl_autoload_register(['Autoload', 'loader']);
use controller\CV;
use controller\Console;
//$ggfs = new controller\CV;
$fssa = new Console;
//$structure = __DIR__."../Db/Data.php";


//foreach ($structure as $data) {
//    $header = prepareHeader($data['title']);
//    $content = prepareContent($data['data']);
//    $arr[$header] = $content;
//}
//extract($arr);

