<?php

/**
 * @file
 */
?>
<div>
  Users:
  <?php	foreach($variables['today_bdays'] as $bday_alert){ ?>
	<div style="width:100%">
	  <div style="width:50%:position:relative;float:left;"><b><?php print $bday_alert->name;?></b></div>
	  <div style="width:50%:position:relative;float:left;"><?php print getAge($bday_alert->birthday);?> years</div>
	</div>
  <?php }?>
</div>