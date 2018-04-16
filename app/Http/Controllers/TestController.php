<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return string
     */
    public function testDbConn()
    {
        if (DB::connection()->getDatabaseName()) {
            return "conncted sucessfully to database ".DB::connection()->getDatabaseName();
        } else {
            return "cannot connect to database";
        }
    }
}