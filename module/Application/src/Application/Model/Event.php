<?php
namespace Application\Model\Event;
use Zend\Feed\Reader\Reader;
 
class Event {

	public $day;
	public $date;
	public $month;
	public $year;
	public $time;
	public $title;
	public $place;
	public $society;
	
	public function _construct($title, $society, $day, $date ) {
	
	}
	
}

?>