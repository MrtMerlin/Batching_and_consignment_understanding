<?php

class Batch {

    // private start and end of day variables, less chance of day start and end being changed.
    private $startBatch = "09:00", $endBatch = "17:00";

    /**
     * public get startBatch to be used elsewhere.
     * @return mixed
     */
    public function getStartBatch()
    {
        return $this->startBatch;
    }

    /**
     * public get endBatch to be used elsewhere.
     * @return mixed
     */
    public function getEndBatch()
    {
        return $this->endBatch;
    }

}
