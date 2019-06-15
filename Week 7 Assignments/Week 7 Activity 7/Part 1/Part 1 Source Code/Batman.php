<?php
/*
Project name and version: CST-126 Activity Guide.Activity_6.2
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Create classes in PHP and apply inheritance.
 */
require_once 'SuperHero.php';

class Batman extends SuperHero
{
   function __construct()
   {
       $health = rand(1, 1000);
       parent::__construct("Batman", $health);     
   }
}

