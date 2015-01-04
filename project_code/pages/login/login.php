<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
// Creating form.
	$formObj = new FormRender();

// Creating form fields.
	$formObj->addField(array('name' => 'login',
					   		 'placeholder' => LOGIN_USERNAME)
					   );

	$formObj->addField(array('name' => 'password',
					   		 'placeholder' => LOGIN_PASSWORD,
							 'inputType' => 'password')
					   );
// Echoing what renderer has rendered.
	$smarty->assign('formObj', $formObj);