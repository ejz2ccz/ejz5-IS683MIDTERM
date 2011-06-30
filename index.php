ass NonArrayException extends Exception{ }

$article1 = array();
$article1 = array('title' => 'my article title', 'body' => 'lorem ipsum');
	changetag($article1);
function changetag($article1){
	try{
	if(!is_array($article1)){
		throw new NonArrayException('You need to send an array');
	}
		$htmlchoice='';
		foreach($article1 as $key => $content){
			switch($key){
				case "title":
				$tag = 'h1';
				$attributes = array("class" => "title");
				break;
				
				case "body":
				$tag = 'p';
				$attributes = array("class" => "content");
				break;
			}
			$htmlchoice .= tag($tag, $attributes, $content);
		}
	$attributes = array("class" => "article");
	echo tag('article', $attributes, $htmlchoice);
	}

	catch(NonArrayException $nae){
		echo $nae->getMessage();
	}
}	
echo '<br>';

function tag($tag, $attributes, $content) {
	$output = '<' . $tag;
	foreach($attributes as $key => $value) {
		$output .= ' ' . $key . '="' . $value . '"';
	}
	$output .= '>' . $content . '' . "\n";

return $output;
}
?>	
