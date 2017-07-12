<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 12/07/2017
 * Time: 11:26
 */

namespace PHPMailDyn;


class PHPMailDyn
{

    public function dynamise($file, $tab_var)
    {
        // get template file;
        $content = file_get_contents('template/' . $file);

        // template error
        if ($content == false){
            return 'Error : template not found.';
        }

        // array error
        if (gettype($tab_var) != 'array'){
            return 'Error : var must be pass in a array.';
        }

        // var not found error
        foreach ($tab_var as $keyVal => $value){
            $pos = strpos($content, $keyVal);
            if ($pos == false){
                return 'Error : var '. $keyVal .' not found.';
            }
        }

        // remplace var in template
        foreach ($tab_var as $key => $simple) {
            $content = str_replace($key, $simple, $content);
        }

        // return finish email
        return $content;

    }

    public function send($dest, $object, $content, $name, $sender)
    {

        // display error for : dest
        if ($dest == false){
            return 'Error : Recipient is empty';
        }

        // display error for : Object
        if ($object == false){
            return 'Error : Object is empty';
        }

        // display error for : Content
        if ($content == false){
            return 'Error : Content is empty';
        }

        // display error for : Name
        if ($name == false){
            return 'Error : Name is empty';
        }

        // display error for : Sender
        if ($sender == false){
            return 'Error : Sender is empty';
        }
        
        // create header
        $header = "From: $name <$sender>\r\n";
        $header .= 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // create and send email
        mail($dest, $object, $content, $header);

        return true;
    }

}