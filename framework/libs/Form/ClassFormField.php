<?php	
	
	Class FormField{
		
		var $pCheckBoxType;
		var $pTextInputType;
		var $pSelectType;
		var $pButtonType;
		
		public function __construct() {
			$this->pTextInputType = '';
			$this->pCheckBoxType = '';
			$this->pSelectType = '';
			$this->pButtonType = '';
		}
		
		public function CreateCheckBox($name, $checked = false) {
			$checkBox = '<input type="checkbox" value="None" id="' . $name . '" '
						. 'class="' . $this->pCheckBoxType . '" name="'
						. $name . '" ';
			if($checked) {
				$checkBox .= 'checked';
			}
			$checkBox .= ' />';
			return $checkBox;
		}
		
		public function CreateInput($name, $placeholder, $value = "", $inputType) {
			$input = '<input type="' . $inputType . '" placeholder="' . $placeholder 
					 . '" value="' . $value . '" id="' . $name . '" name="' 
					 . $name . '"' . ' class="' . $this->pTextInputType . '" />';
			return $input;
		}
		
		public function CreateButton($name, $value = "Button") {
			$button = '<input type="Button" value="' . $value . '" id="'
					 . $name . '" name="' . $name . '" '
					 . 'class="' . $this->pButtonType .'"/>';
			return $button;
		}
		
		public function CreateSelect($name, $options, $keySelected) {
			$select = '<select id="' . $name . '" class="' . $this->pSelectType . '">';
			foreach ($option as $key => $value) {
				$select .= '<option value="' . $key . '"';
				if($keySelected != '') {
					$select .= ' selected ';
				}
				$select .= '>' . $value . '</option>';
			}
			$select .= '</select>';
			
			return $select;
		}
		
	}