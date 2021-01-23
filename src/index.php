<?php

    require('dispatch.php');
    require('batch.php');

    $batch = new Batch();
    $dispatch = new Dispatch();

    $start_time = $batch->getStartBatch();
    $end_time = $batch->getEndBatch();

    echo $dispatch->check_dispatch_period($start_time, $end_time);
