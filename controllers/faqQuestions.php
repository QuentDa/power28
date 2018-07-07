<?php
require_once('models/faq.php');



if(isset($_GET['category_id'])){

	$question = getFaqQuestions( $_GET['category_id'] );

	if(!$question['id']){
		header('location:index.php');
		exit;
	}


	$categories = getFaqCategories();

	require_once('views/faqQuestions.php');
}
else{
	header('location:index.php');
	exit;
}





require_once('views/faqQuestions.php');


?>