<?php

/**
 * Class Consignment
 * Deals with consignments
 */
class Consignment {

    /**
     * @param null $courier_algorithm
     * @param $amount
     * @return mixed|string
     */
    private function create_consignment_number($courier_algorithm = null, $amount): string
    {
        // test for consignment number creation,
        // create random string for use.
        if ($courier_algorithm == null) {
            $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $random_string = '';

            for ($i = 0; $i < $amount; $i++) {
                $index = rand(0, strlen($chars) - 1);
                $random_string .= $chars[$index];
            }

            return $random_string;
        } else {
            // return given algorithm for courier.
            return $courier_algorithm;
        }
    }

    /**
     * Adds a single consignment to record batch
     * @return mixed|string
     */
    public function add_consignment($amount): string
    {
        return $this->create_consignment_number(null, $amount);
    }
}
