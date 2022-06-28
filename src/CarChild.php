<?php

class CarChild extends Car
{
   public function getPlate()
   {
        return parent::getPlate();
   } 

   public function getVIN()
   {
       return parent::getVIN();
   }
}