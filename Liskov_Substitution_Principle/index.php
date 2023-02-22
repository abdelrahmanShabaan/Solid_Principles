<?php

require_once 'File.php';
require_once 'ReadOnly.php';


$file = new ReadOnlyFile();

// function TypeInFile($file , $data)
// {
//     $file->write($data);
// }

function readFromFile($file , $nameoffile)
{ 
    $file->read($nameoffile);
}

// TypeInFile($file , "new data to write");
readFromFile($file , "read.php");