<?php
/**
 * Single responsibility principle:
 * --that's meanning :
 * A class should have one and only one reason to change , meaning that : {{A class should have only one job }}
 */

class UserProducts 

{
    public function create()
    {
        // here you can create table by database after make vaildation 
    }

      public function edit()
    {
        
        // here you can edit table with {{id}} in database 
    }

      public function store()
    {

        // here you can store table with {{id}} in database
        
    }

      public function delete()
    {
        
        
        // here you can delete table with {{id}} in database
    }



}