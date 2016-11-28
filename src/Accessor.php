<?php

/*
|--------------------------------------------------------------------------
| Accessor class for project with laravel 
|--------------------------------------------------------------------------
|
*/

namespace Lakshmajim\Accessor;

use Illuminate\Http\Request;
use App\Http\Requests;


/**
 * Accessor - A Accessor package for Merging array 
 *
 * @author     lakshmaji <lakshmajee88@gmail.com>
 * @package    Accessor
 * @version    1.3.0
 * @since      Class available since Release 1.0.0
 */
class Accessor
{

    /**
     * Generates the array which contains the 
     * resulant array(Mapping between arrays).
     * 
     * @access public
     * @since  Method available since Release 1.0.0
     * @param  data    request data 
     * @param  keys    Mapping of columns to request data
     * @return json $arr
     * @author lakshmajim <lakshmajee88@gmail.com>
     * @return boolean 
     */
    public function getAccessor($data, $keys)
    {
		$result = array();
    	foreach ($keys as $k => $v) {
    		if (isset($data[$v])) {
    			$result[$k] = $data[$v];	
			}
		}
		unset($k);
		unset($v);
		unset($keys);
		return $result;
    }

    //-------------------------------------------------------------------------

}
// //end of Accessor class
// // end of file Accessor.php