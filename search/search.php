<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawnts.org/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<title>New Dawn Treatment Centers</title>

<!--- jQuery and associated scripts. --->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js' type='text/javascript'></script>
<script src='http://www.newdawnts.org/js/showHide.js' type='text/javascript'></script>
<script src='http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js' type='text/javascript'></script>
<!-- jQuery lightBox plugin -->
<script src='http://www.newdawnts.org/js/jquery.lightbox-0.5.js' type='text/javascript'></script>
<link rel='stylesheet' type='text/css' href='http://www.newdawnts.org/css/jquery.lightbox-0.5.css' media='screen' />
<!--- www.newdawnts.org global JS --->
<script src='http://www.newdawnts.org/js/global.js' type='text/javascript'></script>

<style>
	#caption { position: absolute; z-index: 500; color: #fff; font-size: 18px; top: 250px; right: 130px; width: 300px;}
</style>

</head>

<!--[if !IE 7]>
<style type="text/css">
#wrap {display:table;height:100%}
</style>
<![endif]-->

<body>
<div id="Wrap">
<?php include("../header.html");?>
<div id="contentWrap">
<?php include("../slideshow.html");?>
<?php include("../leftSideBar.html");?>

<div id="MainContent">

<?php
/*******************************************
* Sphider Version 1.3.x
* This program is licensed under the GNU GPL.
* By Ando Saabas          ando(a t)cs.ioc.ee
********************************************/
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 
error_reporting(E_ALL); 
$include_dir = "./include"; 
include ("$include_dir/commonfuncs.php");
//extract(getHttpVars());

if (isset($_GET['query']))
	$query = $_GET['query'];
if (isset($_GET['search']))
	$search = $_GET['search'];
if (isset($_GET['domain'])) 
	$domain = $_GET['domain'];
if (isset($_GET['type'])) 
	$type = $_GET['type'];
if (isset($_GET['catid'])) 
	$catid = $_GET['catid'];
if (isset($_GET['category'])) 
	$category = $_GET['category'];
if (isset($_GET['results'])) 
	$results = $_GET['results'];
if (isset($_GET['start'])) 
	$start = $_GET['start'];
if (isset($_GET['adv'])) 
	$adv = $_GET['adv'];
	
	
$include_dir = "./include"; 
$template_dir = "./templates"; 
$settings_dir = "./settings"; 
$language_dir = "./languages";


require_once("$settings_dir/database.php");
require_once("$language_dir/en-language.php");
require_once("$include_dir/searchfuncs.php");
require_once("$include_dir/categoryfuncs.php");


include "$settings_dir/conf.php";

include "$template_dir/$template/header.html";
include "$language_dir/$language-language.php";


if ($type != "or" && $type != "and" && $type != "phrase") { 
	$type = "and";
}

if (preg_match("/[^a-z0-9-.]+/", $domain)) {
	$domain="";
}


if ($results != "") {
	$results_per_page = $results;
}

if (get_magic_quotes_gpc()==1) {
	$query = stripslashes($query);
} 

if (!is_numeric($catid)) {
	$catid = "";
}

if (!is_numeric($category)) {
	$category = "";
} 



if ($catid && is_numeric($catid)) {

	$tpl_['category'] = sql_fetch_all('SELECT category FROM '.$mysql_table_prefix.'categories WHERE category_id='.(int)$_REQUEST['catid']);
}
	
$count_level0 = sql_fetch_all('SELECT count(*) FROM '.$mysql_table_prefix.'categories WHERE parent_num=0');
$has_categories = 0;

if ($count_level0) {
	$has_categories = $count_level0[0][0];
}



function getmicrotime(){
    list($usec, $sec) = explode(" ",microtime());
    return ((float)$usec + (float)$sec);
    }



function poweredby () {
	global $sph_messages;
    //If you want to remove this, please donate to the project at http://www.sphider.eu/donate.php
    print $sph_messages['Powered by'];?>  <a href="http://www.sphider.eu/"><img src="sphider-logo.png" border="0" style="vertical-align: middle" alt="Sphider"></a>

    <?php 
}


function saveToLog ($query, $elapsed, $results) {
        global $mysql_table_prefix;
    if ($results =="") {
        $results = 0;
    }
    $query =  "insert into ".$mysql_table_prefix."query_log (query, time, elapsed, results) values ('$query', now(), '$elapsed', '$results')";
	mysql_query($query);
                    
	echo mysql_error();
                        
}

switch ($search) {
	case 1:

		if (!isset($results)) {
			$results = "";
		}
		$search_results = get_search_results($query, $start, $category, $type, $results, $domain);
		require("$template_dir/$template/search_results.html");
	break;
	default:
		if ($show_categories) {
			if ($_REQUEST['catid']  && is_numeric($catid)) {
				$cat_info = get_category_info($catid);
			} else {
				$cat_info = get_categories_view();
			}
			require("$template_dir/$template/categories.html");
		}
	break;
	}

include "$template_dir/$template/footer.html";
?>
<!--- New DAWN Results.php stuff --->
<h1>Search Results</h1>
<?php 
	$search=$_POST['search'];
	$rs=mysql_query("SELECT * FROM searches WHERE lower(keywords) LIKE '%".strtolower($search)."%'");
	while($row = mysql_fetch_row($rs)){
		$urls=getUrls($row[4]);
		$final[]=array($row[1],$row[3],$urls);
	}
	if($final){
		foreach($final as $val){
			foreach($val[2] as $val1){
	?>
			<div><h4><?=$val[0]?></h4></div>
			<div><?=$val[1]?></div>
			<div><a href="<?=$val1?>"><?=$val1?></a></div>
	<?php
			}	
		}
	}else{
		echo "Try some other search criteria.";
	}
?>

</div><!--End Main Content-->


<?php include("rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("footer.html");?>

</body>
</html>