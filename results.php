<?php 
	$conn=mysql_connect('localhost','erdel','newyear');
	mysql_select_db('steph',$conn);
	/*$conn=mysql_connect('localhost','root','root');
	mysql_select_db('la',$conn);*/
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="./css/global.css" />
<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<title>New Dawn Treatment Centers</title>

<!--- jQuery and associated scripts. --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script src="./js/showHide.js" type="text/javascript"></script>
<script src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js" type="text/javascript"></script>
<!-- jQuery lightBox plugin -->
<script src="./js/jquery.lightbox-0.5.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="./css/jquery.lightbox-0.5.css" media="screen" />
<!--- www.newdawntreatmentcenters.com global JS --->
<script src="./js/global.js" type="text/javascript"></script>

<style>
#caption { position: absolute; z-index: 500; color: #fff; font-size: 18px; top: 250px; right: 130px; width: 300px;}</style>
</head>
<!--[if !IE 7]>
<style type="text/css">
#wrap {display:table;height:100%}
</style>
<![endif]-->
<div id="Wrap">

<?php include("header.html");?>


<div id="contentWrap">

<?php include("slideshow.html");?>
<?php include("leftSideBar.html");?>


<div id="MainContent">

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
<script type="text/javascript">
if (window._ngt)
{
  var tracker = new _ngt("WS-83DA13");
  tracker.track();
}
</script> </body>
</html>
<?php
	function getUrls($ids){
		$exp=array();
		if(strstr($ids,",")){
			$exp=explode(",",$ids);
		}else{
			$exp[]=$ids;
		}
		foreach($exp as $val){
			$sql="SELECT url FROM urls WHERE id='{$val}'";
			$rs=mysql_query($sql);
			$vr=mysql_fetch_array($rs);
			$final[]=$vr[0];
		}
		return $final;
	}
?>

</body>
</html>