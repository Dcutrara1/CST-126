<?php
/*
Project name and version: CST-126 Activity Guide.Activity_6.2
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Create classes in PHP and apply inheritance.
 */

class SuperHero
{
    //Create the following class properties
    Private $name;
    Private $health;
    Private $isDead;
   
   function __construct($name, $health)
   {
       $this->name = $name;
       $this->health = $health;
       $this->isDead = false;
   }
   
   function attack() 
   {
       $attack = rand(1,10);
       return $attack;
   }
   
   function DetermineHealth($hit)
   {
       $this->health -= $hit;
       
       if($this->health <= 0)
       {
           $this->health = 0;
           $this->isDead = true;
       }     
        return $this->health;  
   }
   
   function isDead() 
   {
       return $this->isDead;
   }
}