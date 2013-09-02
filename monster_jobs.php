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
# September 02, 2013
#
##############################################################################################################################

# This code is not tested

?>
 

<?php
   error_reporting(0);
   $tech=$_POST['tech'];
 $monster=file_get_contents("http://jobsearch.monsterindia.com/searchresult.html?fts='$tech'");//dd_content_wrap
 preg_match_all('/<div class=\"dd_content_wrap\">(.*)<\/div>/s',$monster,$monster_div);
 //echo '<pre>'; print_r($monster_div[0]);echo '</pre>';
   file_put_contents('crap_monster.html',$monster_div[0]); $contents=file_get_contents('crap_monster.html');
  
   preg_match_all("/<td(.*)>(.*)<\/td>/siU", $contents, $links); file_put_contents('crap_monster2.html',$links[0]);
  // var_dump($links);
   //echo '<pre>'; print_r($links);echo '</pre>';
 $contents2=file_get_contents('crap_monster2.html');
 
 
   preg_match_all("/<br>(.*)<br>/siU", $contents2, $contents3);  
 
   file_put_contents("crap_monster5.html", $contents3[1]); $content_link=file_get_contents("crap_monster5.html");
   preg_match_all("/<a href=(.*)>(.*)<\/a>/siU", $content_link, $contents3x);  //var_dump($contents3x);//for links (works)
   //preg_match_all("/<a href=(.*)>(.*)<\/a>/siU", $contents2, $contents3); var_dump($contents3);//for links (works)
   echo "<center><h3>'$tech'Jobs From Monster</h3></center>";
    echo "<table border='1'><tr><th>Organization name </th> <th>City & Exp </th><th>Job Description </th><th>Link </th> </tr>";
    //echo $contents3[1][0],'<br>';echo $exp[0],'<br>';echo $exp[1],'<br>//////';
   $total_count =count($contents3[1])+2; $j=3;
   for($i=0;$i<$total_count;$i++){
   //$i=$i+2;
   echo '<tr><td>',$contents3[1][$i]; 
   $mix=$contents3[1][$i+2];  $exp=explode(':',$mix); //var_dump($exp);
   echo '</td><td>',$exp[0];
    echo '</td><td>',$exp[1];
	echo '</td><td>',$contents3x[0][$j],'</td></tr>';
   $i=$i+2;$j=$j+4;
   }
   echo "</table>";
   unlink('crap_monster.html');unlink('crap_monster0.html');unlink('crap_monster2.html');unlink('crap_monster5.html'); //deletes temp file
  ?>
  
