<?php

/**
 *	A php answer to the spotify question.
 *	
 * https://www.spotify.com/uk/jobs/tech/reversed-binary/
 *
 *	chris[at]justni[dot].com
 * 
 */


	if(!empty($_POST)){

		$sample_num = (int) $_POST['sample_input'];

		$binary_num =  decbin($sample_num);

		$reversed_binary_num = strrev($binary_num);

		echo bindec($reversed_binary_num);

	}
?>


<form target="<?=$_SERVER['PHP_SELF'];?>" method="POST">
	<input type="text" name="sample_input"><br />
	<input type="submit">

</form>