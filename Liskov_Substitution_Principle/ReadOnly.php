<?php 


require_once 'File.php';



class ReadOnlyFile extends File 
{

    public function read($file) 
    {
        echo "read from child File ";

    }

    public function write($data)
    {
        throw new Exception("you can not write into file");
    }
}