<?php
$tag = "a";
$attributes = array('title' => 'my article title', 'body' => 'lorem ipsum');
$content="something";

	echo aTag($tag, $attributes, $content);
function aTag($tag, $attributes, $content){
	foreach($attributes as $attribute){
	
		$test=switch($attribute){
			case 'title':
				$key='H1';
				$attribute='class'=>$value;
			break;
			case 'body':
				$key='p';
				$attribute='class'=>$value;
			break;
		}
		$test .=tagwriter($tag, $attributes, $content);
	}
}	
	function tagwriter($tag, $attributes, $content){	
		$html = '<' . $tag;
		foreach($attributes as $key=>$value){
			if(is_array($attributes)){
			$html .= ' ' . $key . '="' . $value . '"';
			
			
			$html .= '>' . $content . "</" . $tag . "><br>\n";
			
			return $html;
			}else{
				echo 'not an array';
			}
		}
}
?>
