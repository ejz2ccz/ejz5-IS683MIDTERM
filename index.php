ttributes = array();

$tag = "a";
$articles = array('title' => 'my article title', 'body' => 'lorem ipsum');
$content = 5;
/*
5.  Write a function that can print out any HTML tag
6.  Check if the array/variable containing HTML attributes is an array and have it print out to the screen an error, if it is not an array.
7.  Create an array that contains this information:
	array('title' => 'my article title', 'body' => 'lorem ipsum');
8.  Write a function that can process this array into a format that will enable your tag function to print out an H1 tag for the 'title' and a 'p' tag for the body
9.  You should use the KEY of the array as the class attribute value that is printed


*/

echo writeatag($tag, $attributes, $content);
echo "Done";

//create an html a tag
function checkatag($tag, $attributes, $content){

	$html = '<' . $tag;
	foreach($articles as $article){
		if(!is_array($key)){
		echo 'this needs to be an array';
		}else{
			writeatag();
		
		$html .= ' ' . $attribute . '="' . $value . '"';
		}
    }
	$html .= '>' . $content . "</" . $tag . "><br>\n";
	return $html;
} 
function writeatag(){


	function writeatag($article){
	foreach($article as $key => $content){
		switch($key){
		case "title":
			$tag = 'h1';
			$attributes = array("class" => $key);
			break;
			
		case "body":
			$tag = 'p';
			$attributes = array("class" => $key);
			break;
			return $attributes;
	}
}
}

?>
