<?php

    require('dispatch.php');
//    require('batch.php');
//    require('consignment.php');
//
    $batch = new Batch();
    $dispatch = new Dispatch();
//    $consignment = new Consignment();
//

    $amount = 14;

    $start_time = $batch->get_start_batch();
    $end_time = $batch->get_end_batch();


    $start_batch = [];
    $start_batch[] = $batch->start_batch(12);
    echo $batch->end_batch($start_batch);

//    echo $dispatch->check_dispatch_period($start_time, $end_time);

//    echo $consignment->add_consignment();

