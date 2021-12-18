<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    public function help() {

        return response('<img src=https://c.tenor.com/QBYMwogv3PoAAAAi/zxcursed.gif><a href=zxc.postman_collection.json>postman collection</a>', 200);
    }

    public function main() {
        return response('<h2>тык ниже</h2><a href=/api>сюда</a>');
    }

    public function create(Request $request) {
        $film_name = $request->input("film_name");
        $film_about = $request->input("film_about");
        $film_duration = $request->input("film_duration");

        $zxc = new Films();
        $zxc->film_name = $film_name;
        $zxc->film_about = $film_about;
        $zxc->film_duration = $film_duration;
        $zxc->save();

        return response()->json($zxc, 200);
    }

    public function show($film_id)  {
        $zxc = Films::find($film_id);
        return response()->json($zxc, 200);

    }

    public function edit(Request $request, $film_id) {
        $film_name = $request->input("film_name");
        $film_about = $request->input("film_about");
        $film_duration = $request->input("film_duration");

        $zxc = Films::find($film_id);
        $zxc->film_name = $film_name;
        $zxc->film_about = $film_about;
        $zxc->film_duration = $film_duration;
        $zxc->save();

        return response()->json($zxc, 200);
    }

    public function delete($film_id) {
        $zxc = Films::find($film_id);
        $zxc->delete();
        return response()->json(["message" => "succesfully deleted"], 200);
    }

    public function all() {
        $zxc = Films::all();

        return response()->json($zxc, 200);
    }

}
