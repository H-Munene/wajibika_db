<?php

namespace App\Http\Controllers;

use App\Models\mda_projects;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storemda_projectsRequest;
use App\Http\Requests\Updatemda_projectsRequest;
use Illuminate\Support\Facades\DB;

class MdaProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //display all mda projects
        $mda_projects = DB::table('mda_projects_oag_audited')->get();

        return $mda_projects;

    }

    public function getProjectsByStateDepartment($statedepartment)
    {
        return DB::table('mda_projects_oag_audited')
            ->join('statedepartments', 'mda_projects_oag_audited.statedepartment_id', '=', 'statedepartments.id')
            ->join('counties', 'mda_projects_oag_audited.county_id', '=', 'counties.id')
            ->select('counties.county_name', 'statedepartments.statedepartment_name', 'mda_projects_oag_audited.mda_project_name', 'statedepartments.cumulative_contracts_amount', 'statedepartments.cumulative_amounts_paid')
            ->where('statedepartments.statedepartment_name', $statedepartment)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storemda_projectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mda_projects $mda_projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mda_projects $mda_projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemda_projectsRequest $request, mda_projects $mda_projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mda_projects $mda_projects)
    {
        //
    }
}
