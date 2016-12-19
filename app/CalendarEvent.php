<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CalendarEvent extends Model
{
    protected $table = 'calendar_events';


    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->name;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */


    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getEventStart()
    {
        return $this->eventstart;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEventEnd()
    {
        return $this->eventend;
    }

    /**
     * Get the event's ID
     *
     * @return int|string|null
     */
    public function getId()
    {
        return $this->id;
    }


}
