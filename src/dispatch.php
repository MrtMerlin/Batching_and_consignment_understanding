<?php

include 'batch.php';

/**
 * Class Dispatch
 * Deals with all dispatch data
 */
class Dispatch {

    /**
     * @param $start_time
     * @param $end_time
     * @param $amount
     * @param $batch
     * @return string
     *
     * Check if current time is within the dispatch period.
     */
    public function check_dispatch_period($start_time, $end_time, &$amount, &$batch): string
    {
        $batch = new Batch();
        $time = time();
        $current_time = date("H:i", $time);

        if ($current_time >= $start_time && $current_time <= $end_time) {
            return $batch->start_batch($amount);
        } else {
            return $batch->end_batch($batch);
        }
    }

}