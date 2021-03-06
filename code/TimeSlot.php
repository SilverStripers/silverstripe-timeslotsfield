<?php
/**
 * Created by PhpStorm.
 * User: priyashantha
 * Date: 9/8/17
 * Time: 12:55 PM
 */

class TimeSlot extends DataObject
{

    private static $db = array(
        'Time' => 'Time'
    );

    private static $default_sort = 'Time ASC';

    public function getTitle()
    {
        return $this->dbObject('Time')->Nice();
    }

    public function TimeField($name, $status)
    {
        $status = $status ? : 'old';
        return TimePickerField::create($name. "[$status][$this->ID]", '', $this->Time);
    }

}