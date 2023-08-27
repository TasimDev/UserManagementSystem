<?php

class Util
{
    // Method of input value sanitization
    public function testInput($data)
    {
        //Remove all spaces in input values
        $data = trim($data);
        //Remove all slashes from  the input values
        $data = stripslashes($data);
        //This will be convert html spacial characters into html utilities
        $data = htmlspecialchars($data);
        //This will allso remove any html tags like script airbody etc.
        $data = strip_tags($data);

        return $data;
    }
    // Method for displaying Success And Error Message
    public function showMessage($type, $message)
    {
        return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
              <strong>' . $message . '</strong>
              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
}

?>