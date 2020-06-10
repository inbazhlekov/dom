<?php 

$link="https://www.sofascore.com/albacete-balompie-rayo-vallecano/tgbsYgb";
$link1="https://www.sofascore.com/de/albacete-balompie-rayo-vallecano/tgbsYgb";

 ?>



<?php
include_once('simple_html_dom.php');
// Create DOM from URL or file
$html = file_get_html($link);

foreach ($html->find('div.Header__Main-sc-1dyxed1-0.hkVBhG ul li') as $text){
	echo $text->plaintext."<br/>";

}

foreach ($html->find('div.styles__MatchInfoRow-sc-1nav912-1.gkEvHG text') as $date){
	echo $date->plaintext;
}
?>

<br>
<br>
<?php
include_once('simple_html_dom.php');
// Create DOM from URL or file
$html = file_get_html($link1);

foreach ($html->find('div.Header__Main-sc-1dyxed1-0.hkVBhG ul li') as $text){
	echo $text->plaintext."<br/>";

}
foreach ($html->find('div.styles__MatchInfoRow-sc-1nav912-1.gkEvHG text') as $date){
	echo $date->plaintext;
}
?>
