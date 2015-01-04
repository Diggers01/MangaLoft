<?php
	$CssFile = $JsFile = null;
	$smarty = new Smarty;
	$smarty->debugging = false;
	
// Default smarty variables.
	$smarty->assign('URL', URL);
	
// Call requiered files.
	$objFiles = new Files;
	$FileName = $objFiles->GetPublicFile($this->errorMsg);

	include($FileName . '.php');
	include($FileName . '_text.php');
	$smarty->assign("Content", $FileName . '.tpl');
	
	if ($objFiles->IsCssFile($FileName)) 
		$CssFile = $FileName . '.css';
	
	if ($objFiles->IsJsFile($FileName))
		$JsFile = $FileName . '.js';
	
	$smarty->assign("CssFile", $CssFile);
	$smarty->assign("JsFile", $JsFile);
	
// Set the Sites title.
	if (isset($this->title))
		$SiteTitle = $this->title;
	else
		$SiteTitle = SITE_NAME;

	$smarty->assign("SiteTitle", $this->title);
	$smarty->display(PUBLIC_SITE . 'public.tpl');
	
	var_dump_pre($_SESSION);