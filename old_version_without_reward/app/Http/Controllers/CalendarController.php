<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public static function findPackage()
    {
        date_default_timezone_set("Asia/Tehran");

        return DB::table('tbl_calendar')
            ->where('dmy', date('dmY'))
            ->where('status', '<>', '3')
            ->orderBy('id', 'desc')
            ->first()
            ->package;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show()
    {
        return DB::table('tbl_calendar')
            ->where('package', self::findPackage())
            ->get();
    }

}
