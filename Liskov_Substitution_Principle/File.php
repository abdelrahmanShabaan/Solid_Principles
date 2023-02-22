<?php 



class File 

{

        public function read($file) 
        {
            echo "read from Parent File ";

        }

        public function write($data)
        {
            echo "write into file - $data";
        }


}