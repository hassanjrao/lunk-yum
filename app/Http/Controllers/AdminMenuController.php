<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Menu;
use App\Models\Week;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $weeks = Week::all();

        return view('admin.menu.index', compact('weeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $week = Week::find($id);
        $days = Day::all();
        $menu = Menu::where('week_id', $id)
        ->orderBy('day_id', 'asc')
        ->get();

        return view('admin.menu.edit', compact('week', 'days', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        /*
         "_method" => "PUT"
        "menu" => array:5 [▼
                1 => array:3 [▼
                    "main" => "Consectetur accusam"
                    "side_1" => "Rerum expedita rerum"
                    "side_2" => "Rem ut necessitatibu"
                ]
                2 => array:3 [▼
                    "main" => "Voluptatem nulla ver"
                    "side_1" => "Officia velit beatae"
                    "side_2" => "Animi officia sit"
                ]
                3 => array:3 [▶]
                4 => array:3 [▶]
                5 => array:3 [▶]
        ]
        */

        $week = Week::findorfail($id);

        foreach ($request->menu as $key => $value) {
            $menu = Menu::where('week_id', $week->id)->where('day_id', $key)->first();

            $menu->main = $value['main'];
            $menu->side_1 = $value['side_1'];
            $menu->side_2 = $value['side_2'];
            $menu->week_id = $week->id;
            $menu->day_id = $key;
            $menu->save();
        }


        return redirect()->route('admin.menu.index')->withToastSucces('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
