<?php

/**
 *	A php answer to the spotify question.
 *	
 *	The Question:
 *  https://www.spotify.com/uk/jobs/tech/reversed-binary/
 *
 *  The answer:
 *  https://github.com/adulion/spotify_binary_answer
 *
 *  Note:
 *  The answer can not be written in php and has to run from the
 *  Command line but this just shows a simple way to achieve 
 *  An answer in php
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