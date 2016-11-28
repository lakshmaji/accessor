<?php namespace Lakshmajim\Accessor\Facade;
 
use Illuminate\Support\Facades\Facade;
 
/**
 * Accessor - Facade to support integration with Laravel framework 
 *
 * @author     lakshmaji <lakshmajee88@gmail.com>
 * @package    Accessor
 * @version    1.0.0
 * @since      Class available since Release 1.0.0
 */ 
class Accessor extends Facade {
 
    protected static function getFacadeAccessor() { return 'accessor'; }
 
}
// end of class Accessor
// end of file Accessor.php