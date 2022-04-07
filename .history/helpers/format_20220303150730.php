<?php
/**
* Format Class
*/
class Format{
public function formatDate($date){
return date(&#39;F j, Y, g:i a&#39;, strtotime($date));
}

public function textShorten($text, $limit = 400){
$text = $text. &quot; &quot;;
$text = substr($text, 0, $limit);
$text = substr($text, 0, strrpos($text, &#39; &#39;));
$text = $text.&quot;.....&quot;;
return $text;
}

public function validation($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}

public function title(){
$path = $_SERVER[&#39;SCRIPT_FILENAME&#39;];
$title = basename($path, &#39;.php&#39;);
//$title = str_replace(&#39;_&#39;, &#39; &#39;, $title);
if ($title == &#39;index&#39;) {
$title = &#39;home&#39;;
}elseif ($title == &#39;contact&#39;) {
$title = &#39;contact&#39;;
}
return $title = ucfirst($title);
}
}
?>