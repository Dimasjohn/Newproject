<?php 
$maxRows_Demo = 10;
$Demo = new WA_MYSSQLi_RS ("Demo",$DBConnection,$maxRows_Demo);
$Demo->setQuery("SELECT * FROM demo");

$Demo->execute();

$DemoTotal = new WA_MYSSQLi_RS ("DemoTotal",$DBConnection);
$DemoTotal->setQuery("SELECT count(1) a FROM demo");
$DemoTotal->execute();
$Demo_Total = (int)$DemoTotal->Results[0]['a'];
$Req_pages = ceil("$Demo_Total/$maxRows_Demo");





$total_Rows_Demo = $Demo_Total;
$pageNum_Demo = 0;
if(isset($_GET['pageNum_Demo'])){
	$pageNum_Demo = $_GET['pageNum_Demo'];
}
$incdone = false;
if($maxRows_Demo == 0){
	$maxRows_Demo = 1;
	$incdone = true;
}

$totalpages_Demo = ceil($totalRows_Demo/$maxRows_Demo) -1;

if($totalpages_Demo > 0 && !$incdone){
	$elems = array();
	for($i=0;$i<$Req_pages;$i++)
}

if ($i == $pageNum_Demo) {

}	else{
	$elems[] = "<a href=\"search.php? pageNum_Demo=$i\">".($i+1)."</a>";
}
		}
	echo implode("| ", $elems);

}


?>