<?php
$xml=("https://timesofindia.indiatimes.com/rssfeeds/3012535.cms");
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<20; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
 ->item(0)->childNodes->item(0)->nodeValue;
 $item_desc=$x->item($i)->getElementsByTagName('description')
 ->item(0)->childNodes->item(0)->nodeValue;
 echo ("<div class=\"card\">");
 echo ("<a href=\"".$item_link."\"><h5 class=\"card-header\">".$item_title."</h5></a>");
echo ("</div>");
}
?>