<?php

	class Files {
		
		public function __construct() {
			
		}
		
		public function GetPublicFile($Error) {
			
			$methods = new Methods;
			$PageName = $methods->GetPageName();
			
			if ($Error == '') {
				if ($PageName != '') {
					return self::_getFile($PageName);
				}
				else {
					return self::_getDefaultFile();
				}
			}
			else {
				return self::_getErrorFile();
			}
		}
		
		private function _getErrorFile() {
			return PROJECT_CODE . PROJECT_PAGES . 'error/error';
		}
		
		private function _getDefaultFile() {
			return PROJECT_CODE . PROJECT_PAGES . 'main/main';
		}
		
		private function _getFile($FileName) {
			return PROJECT_CODE . PROJECT_PAGES . $FileName . '/' . $FileName;
		}
		
		public function DoesFileExist($File) {
			$CssFile = self::IsCssFile($File);
			$JsFile = self::IsJsFile($File);
			$PhpFile = self::IsPhpFile($File);
			$arrFiles = array();
			if ($CssFile) {
				return true;
			}
			return false;
		}
		
		public function IsCssFile($File) {
			if (file_exists($File . '.css')) {
				return true;
			}
			return false;
		}
		
		public function IsJsFile($File) {
			if (file_exists($File . '.js')) {
				return true;
			}
			return false;
		}
		
		public function IsPhpFile($File) {
			if (file_exists($File . '.php')) {
				return true;
			}
			return false;
		}
	}