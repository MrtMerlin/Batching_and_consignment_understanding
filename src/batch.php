<?php

include 'consignment.php';

/**
 * Class Batch
 * For dealing with all batch needs.
 */
class Batch {

    // private start and end of day variables, less chance of day start and end being changed.
    private $start_batch = "09:00";
    private $end_batch = "23:00";

    /**
     * public get start_batch to be used elsewhere.
     * @return mixed
     */
    public function get_start_batch(): string
    {
        return $this->start_batch;
    }

    /**
     * public get end_batch to be used elsewhere.
     * @return mixed
     */
    public function get_end_batch(): string
    {
        return $this->end_batch;
    }

    /**
     * @param $amount
     * @return array
     */
    public function start_batch($amount): array
    {
        return $this->record_batch($amount);
    }

    /**
     * @param $batch
     * @return array
     */
    public function end_batch($batch): array
    {
        $batch_consignments[] = $batch;
        $consignments_to_return = [];

        foreach ($batch_consignments as $key => $consignment) {
            $consignments_to_return[] .= "Ref number " . ($key + 1) . " Consignment Number : " . $consignment;
        }

        return $consignments_to_return;
    }

    /**
     * record batch to create the array to store the consignments created.
     * @param $amount
     * @return array
     */
    public function record_batch($amount): array
    {
        $created_consignments = [];
        $consignments = new Consignment();

        for ($i = 0; $i < $amount; $i++) {
            $created_consignments[] .= $consignments->add_consignment($amount);
        }

        return $created_consignments;
    }
}
