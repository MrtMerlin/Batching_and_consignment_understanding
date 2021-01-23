<?php

class Dispatch {

    private $start, $end;

    public function check_dispatch_period($start_time, $end_time)
    {
        $time = time();
        $current_time = date("h:i", $time);

        if ($current_time <= $start_time || $current_time >= $end_time) {
            return "Working day!";
        }
        else
        {
            return "Your day has ended!";
        }
    }

}