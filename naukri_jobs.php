<?php

##############################################################################################################################
#										=======================
#												ReadMe
#										=======================
#				
# Disclaimer:				
# This amateur Weekend production is for ***purely educational purpose***. 
# The code may be substandard, comes with no guaranty and the ***process may be illegal according to many countries' lawsuits*
# Be responsible. Don't misuse the code, I hold no responsibility for your usage. 
# I'm a novice programmer, started this series just for familiarizing myself with the fundamental concepts and for fun. 
# You are advised to ***delete the code*** as soon as you understand it. 
#
# Credits: pbvamsi@gmail.com
# September 01, 2013
#
##############################################################################################################################

# This code is not tested

?>
 
<?php
error_reporting(0);
$tech=$_POST['tech'];
 //include('simplehtmldom_1_5/simple_html_dom.php');
 $naukri_link='http://jobsearch.naukri.com/'.$tech.'-jobs'; //echo $naukri_link;
$naukri=file_get_contents($naukri_link);//div:jRes a:l_j 
//echo '<pre>'; print_r($naukri);
  //file_put_contents('naukri.html',$naukri);
  
  
 /* naukri */ 
  
preg_match_all('/<div class=\"jRes\">(.*?)<\/div>/s',$naukri,$naukri_div);
 
$tot= count($naukri_div);
for($i=0;$i<$tot;$i++){
for($j=0;$j<48;$j++){ 
$x[]=$naukri_div[$i][$j].PHP_EOL .PHP_EOL .PHP_EOL;
}
} 
 file_put_contents('crap_naukri.html',$x); //var_dump($x);echo '<pre>';print_r($x); echo '</pre>';
 
 
 //for urls
$url = "crap_naukri.html";
$input = @file_get_contents($url) or die("Could not access file: $url");
$regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
if(preg_match_all("/$regexp/siU", $input, $links)) {}
//var_dump($links[2]);  ///contains urls

 //for job_description
 $regexp = "<em ?.*>(.*)<\/em>";
if(preg_match_all("/$regexp/siU", $input, $jd)) {} 
//var_dump($jd);  ///contains JDs
//echo '<pre>';print_r($jd); echo '</pre>';

 //for org_name 
$regexp = "<dfn ?.*>(.*)<\/dfn>";
if(preg_match_all("/$regexp/siU", $input, $org_name)) {} 
//var_dump($org_name);  ///contains org_name
//echo '<pre>';print_r($org_name); echo '</pre>';

 //for city 
$regexp = "<i ?.*>(.*)<\/i>";
if(preg_match_all("/$regexp/siU", $input, $city)) {} 
//var_dump($city[1]);  ///contains city
//echo '<pre>';print_r($city); echo '</pre>';

 //for title_exp 
$regexp = "<strong ?.*>(.*)<\/strong>";
if(preg_match_all("/$regexp/siU", $input, $title_exp)) {} 
//var_dump($title_exp[1]);  ///contains city
//echo '<pre>';print_r($title_exp); echo '</pre>';

//echo $title_exp[1][0],$org_name[1][0],$city[1][0],$jd[1][0],$links[1][0];
echo "<center><h3>$tech listed jobs on Naukri </h3></center>";
 
echo "<table border='1'><tr><th>Title & Exp </th><th> Organization name</th><th>City </th><th>Job Description </th><th>Link </th> </tr>";
 
for($all=0;$all<count($title_exp[1]);$all++)
{
echo "<tr><td>".$title_exp[1][$all]."</td><td>".$org_name[1][$all]."</td><td>".$city[1][$all]."</td><td>".$jd[1][$all]."</td><td> <a href=".$links[2][$all].">Naukri Link</a></td></tr>";
}
echo "</table>";
   unlink('crap_naukri.html');
?>
 
