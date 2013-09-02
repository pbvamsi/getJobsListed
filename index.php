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

<?php error_reporting(0); ?>

<div style="position:Absolute; top:25%; left:10%;background-color: #99ddee; ">
<form action="naukri_jobs.php" method="post">
<h3>Naukri Jobs</h3>
<h3>Enter The Technology <input type="text" name="tech" placeholder="like php,java,c" required>
<input type="submit" value="Fetch"></h3><br/>Enter CSV for multiple tech like "java,c" "php,mysql"
</form>
</div>
<div style="position:Absolute; top:25%; left:50%;background-color: #99eecc;">
<h3>Monster Jobs</h3>
<form action="monster_jobs.php" method="post">
<h3>Enter The Technology <input type="text" name="tech" placeholder="like php,java,c" required>
<input type="submit" value="Fetch"></h3><br/>Enter CSV for multiple tech like "java,c" "php,mysql"
</form>
</div>
