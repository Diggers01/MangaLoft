<?php

	class FormRender extends Database{
		
		public function __construct() {
			
		}
		
	/**
	 * Add Fields to the Form object.
	 *
	 * @param $type is the type of 
	 */
		public function addField($details = array(), $type = 'input') {
			$this->checkDetailsArray($details);
			$formField = new FormField();
			switch($type) {
				case 'input';
				default:
					$this->$details['name'] 
						= $formField->CreateInput($details['name'],
												 $details['placeholder'],
												 $details['value'],
												 $details['inputType']);
					break;
			}
		}
		
		public function checkDetailsArray(&$details){
			$allTypes = array('name',
							  'placeholder',
							  'value',
							  'checked',
							  'options',
							  'keySelected',
							  'inputType');
  			foreach ($allTypes as $key => $value) {
  				if(!array_key_exists($value, $details)) {
					if ($value == 'inputType') {
						$details[$value] = 'text';
					}
					else {
						$details[$value] = '';	
					}  					
  				}
  			}
		}
		
	}