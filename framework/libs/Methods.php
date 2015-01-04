
<?php

	class Methods {
		
		public function __contruct() {
			
		}
		
		public function GetPageName() {
			self::_setPageName();
			return $this->PageName;
		}
		
		private function _setPageName() {
			self::_setPostValues();
			$arrURL = $this->_arrURL;
			$this->PageName = $arrURL[0];
		}
		
		public function GetPostValues() {
			self::_setPostValues();
			return $this->_arrURL;
		}
		
		private function _setPostValues() {
			$url = isset($_GET['url']) ? $_GET['url'] : null;
	        $url = rtrim($url, '/');
	        $url = filter_var($url, FILTER_SANITIZE_URL);
	        $arrURL = explode('/', $url);
	        foreach ($arrURL as $key => $value) {
			    $arrNewURL[$key] = htmlspecialchars( $value , ENT_QUOTES);
			}
			$this->_arrURL = $arrNewURL;
		}
		
	}