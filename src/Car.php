<?php

/**
 * Car
 *
 * An example car class
 */
class Car
{

    /**
     * Get the description
     *
     * @return integer A random string
     */
    public function getDescription()
    {
        return $this->getPlate() . $this->getVIN();
    }

    /**
     * Get a random Plate
     *
     * @return integer The Plate
     */
    protected function getPlate()
    {
        return rand();
    }

    /**
     * Get a random VIN
     *
     * @return string The VIN
     */
    private function getVIN()
    {
        return uniqid();
    }


    /**
     * Get a random token with specified prefix
     *
     * @return string $prefix token prefix
     * 
     * @return string The token
     */
    private function getPrefixedToken(string $prefix)
    {
        return uniqid($prefix);
    }
}
