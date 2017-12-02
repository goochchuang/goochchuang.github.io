<? 
	ob_start();
?>
--PHP-alt-<?php echo $random_hash; ?> 
Content-Type: text/html; charset="utf8" 
Content-Transfer-Encoding: 7bit



				<div>
                    <b>Name</b> : <? echo $name; ?><br /><br />
		    <b>Email</b> : <? echo $email; ?><br /><br />
                    <b>Message</b> : <? echo $message; ?>
                </div>
                

--PHP-alt-<?php echo $random_hash; ?>--
<?
	$contents=ob_get_contents();
   ob_end_clean();
   return($contents);
?>


	