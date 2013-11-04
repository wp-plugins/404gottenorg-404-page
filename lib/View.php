<?php
/**
 * This file contains a class for loading the presentation layer/files
 *
 * @author Kenny Katzgrau <katzgrau@gmail.com>
 */

/**
 * This class contains methods for loading WPSearch views
 */
class Compassion_View
{
    /**
     * Load a view file. The file should be located in ../views.
     * @param string $file The filename of the view without the extension (assumed
     *  to be PHP)
     * @param array $data An associative array of data that be be extracted and
     *  available to the view
     */
    public static function load($file, $data=array())
    {
        $file = dirname(__FILE__) . '/../views/' . $file . '.php';

        if(!file_exists($file))
        {
            throw new Exception("View '$file' was not found");
        }

        include($file);
    }
}