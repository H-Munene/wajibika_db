<?php

namespace App\Http\Controllers;

use App\Models\citizen_audit_projects;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storecitizen_audit_projectsRequest;
use App\Http\Requests\Updatecitizen_audit_projectsRequest;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class CitizenAuditProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all citizen
        $citizen_mda_projects = DB::table('citizen_audited_projects')->get();

        return $citizen_mda_projects;
    }

    public function getAllFromSpecificCounty($county_id)
    {
        $citizen_mda_projects_in_county_id = DB::table('citizen_audited_projects')->where('county_id', $county_id)->get();

//        return $citizen_mda_projects_in_county_id->filter(function ($project) {
//            global $request;
//            return $project->where('county_id', $request->county_id);
//        });
        return $citizen_mda_projects_in_county_id;
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
    public function store(Storecitizen_audit_projectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(citizen_audit_projects $citizen_audit_projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(citizen_audit_projects $citizen_audit_projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecitizen_audit_projectsRequest $request, citizen_audit_projects $citizen_audit_projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(citizen_audit_projects $citizen_audit_projects)
    {
        //
    }
}
