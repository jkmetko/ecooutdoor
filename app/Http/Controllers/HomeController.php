<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('home', [
            'onas' => DB::table('onas')->first(),
            'team' => DB::table('team')->get(),
            'ponuka' => DB::table('ponuka')->get(),
            'title' => 'caf',
            'styles' => [
                'js/advanced-datatable/css/demo_table.css',
                'js/datetimepicker/DateTimePicker.css'
            ],
            'scripts' => [
                'js/advanced-datatable/js/jquery.dataTables.js',
                'js/data-tables/DT_bootstrap.js',
                'js/datetimepicker/DateTimePicker.js',
                'js/dynamic_table_init.js',
                'ajax/ajax.dealsFilter.js',
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
