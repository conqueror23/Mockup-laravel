<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use SimpleXMLElement;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function readXml(){

        $file = "<?xml version='1.0' standalone='yes'?>
        <movies>
         <movie>
          <title>PHP: Behind the Parser</title>
          <characters>
           <character>
            <name>Ms. Coder</name>
            <actor>Onlivia Actora</actor>
           </character>
           <character>
            <name>Mr. Coder</name>
            <actor>El Act&#211;r</actor>
           </character>
          </characters>
          <plot>
           So, this language. It's like, a programming language. Or is it a
           scripting language? All is revealed in this thrilling horror spoof
           of a documentary.
          </plot>
          <great-lines>
           <line>PHP solves all my web problems</line>
          </great-lines>
          <rating type='thumbs'>7</rating>
          <rating type='stars'>5</rating>
         </movie>
        </movies>";
        $text  =  new SimpleXMLElement($file);
        echo $text->movie[0]->title;
        $text1 = xpath('movie');
        print_r($text1);

    }
}
