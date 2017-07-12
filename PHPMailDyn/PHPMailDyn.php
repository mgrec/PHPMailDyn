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

    public function dynamise($file, array $tab_var)
    {
        // get template file;
        $content = file_get_contents('template/' . $file);

        // remplace var in template
        foreach ($tab_var as $key => $simple) {
            $return = str_replace($key, $simple, $content);
        }

        // return finish email
        return $return;

    }

    public function send($dest, $object, $content, $name, $sender)
    {
        // create header
        $header = "From: $name <$sender>\r\n";
        $header .= 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // create and send email
        mail($dest, $object, $content, $header);
        
        return true;
    }

}