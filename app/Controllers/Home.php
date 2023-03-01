<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard.php');
    }

    public function sbackbone()
    {
        return view('view_sbackbone.php');
    }

    public function sbackbonespm()
    {
        return view('view_sbackbonespm.php');
    }

    public function sbackbonebpm()
    {
        return view('view_sbackbonebpm.php');
    }

    public function backbone()
    {
        return view('view_backbone.php');
    }

    public function backbonespm()
    {
        return view('view_backbonespm.php');
    }

    public function backbonebpm()
    {
        return view('view_backbonebpm.php');
    }

   

    public function distribusi()
    {
        return view('view_distribusi.php');
    }

    public function distribusispm()
    {
        return view('view_distribusispm.php');
    }

    public function distribusibpm()
    {
        return view('view_distribusibpm.php');
    }


    public function akses()
    {
        return view('view_akses.php');
    }

    public function aksesspm()
    {
        return view('view_aksesspm.php');
    }

    public function aksesbpm()
    {
        return view('view_aksesbpm.php');
    }


    public function gi()
    {
        return view('view_gi.php');
    }

    public function gispm()
    {
        return view('view_gispm.php');
    }

    public function gibpm()
    {
        return view('view_gibpm.php');
    }



    public function listpop()
    {
        return view('view_listpop.php');
    }
}