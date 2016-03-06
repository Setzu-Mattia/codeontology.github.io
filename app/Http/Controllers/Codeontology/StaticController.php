<?php

namespace App\Http\Controllers\Codeontology;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller as Controller;


class StaticController extends Controller {
    private static $config = ["url" => "http://localhost:8000"];

    public static function home() {
        return view('home')->with([
            "config" => StaticController::$config
        ]);
    }

    public static function docs() {
        return view('docs')->with([
            "config" => StaticController::$config
        ]);
    }

    public static function query() {
        return view('query')->with([
            "config" => StaticController::$config
        ]);
    }

}
