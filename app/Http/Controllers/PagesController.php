<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 4/3/2018
 * Time: 4:04 PM
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{
    protected function contact(){
        return view('pages.contactus');
    }
}