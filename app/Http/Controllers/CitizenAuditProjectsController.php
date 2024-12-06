<?php

namespace App\Http\Controllers;

use App\Models\citizen_audit_projects;
use App\Http\Requests\Storecitizen_audit_projectsRequest;
use App\Http\Requests\Updatecitizen_audit_projectsRequest;
use App\Models\county;
use Illuminate\Support\Facades\DB;

class CitizenAuditProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counties = county::with(['projects'])->get();

        $formattedData = $counties->filter(function ($county) {
            return $county->projects->count() > 0;
        })->map(function ($county) {
            return [
                'County' => $county->county_name,
                'Projects' => $county->projects->map(function ($project) {
                    return [
                        'name' => $project->project_name,
                        'amount allocated' => $project->amount_allocated,
                        'amount paid' => $project->amount_paid,
                        'status' => $project->project_status,
                    ];
                })->toArray(),
            ];
        })->toArray();

        return response()->json($formattedData);
    }

    //projects by county name
    public function getAllFromSpecificCounty($county_name)
    {
        return DB::table('citizen_audited_projects')
            ->join('counties', 'citizen_audited_projects.county_id', '=', 'counties.id')
            ->join('regions', 'counties.region_id', '=', 'regions.id')
            ->select('regions.region_name', 'counties.county_name', 'citizen_audited_projects.project_name', 'citizen_audited_projects.amount_allocated', 'citizen_audited_projects.amount_paid')
            ->where('counties.county_name', $county_name)->get();
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
