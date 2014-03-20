/*
*
* 	A Simple class to collect errors
*	and store them in an array
*
*/

class error {
	
	/*
	* @var errors
	* 
	* Stores our errors array
	*/
	public static $errors = "";
	
	
	/*
	* @func set_errors
	* @param $input
	*
	* Collects our errors and parses 
	* them to @var $errors
	*
	* errors::set_errors(array('key' => 'val'))
	*/
	static function set_errors($input) {
		
		foreach ( $input as $key => $val ) {
	
			self::$errors[$key] = $val;
			// use self instead of $this in static functions.
			
		}
		
		
	
	}
	
	/*
	* @func get_errors_array
	* @param NONE
	* 
	* This gets the array of errors
	*
	* errors::get_errors_array();
	*/
	
	static function get_errors_array(){
	
		return self::$errors;	
		
	}
	
	/*
	* @func get_error
	* @param $input
	* 
	* this gets single array by $key
	*
	* errors::get_error( 'key' );
	*/
	
	static function get_error( $input ){

		foreach (self::$errors as $key => $val) {
			
			if ( $input == $key ) {
				
				return $val;
				
			}
			
		}
		
	}
	
	
}
