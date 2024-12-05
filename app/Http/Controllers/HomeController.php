<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $cca = "3716569830";
        $cap = "3100222841";
        $mda_projects_count = DB::table('mda_projects_oag_audited')->count();
        $asOfmda = "30 June, 2023";
        //projects count
        $citizen_projects_count = DB::table('citizen_audited_projects')->count();
        //source
        $source = "https://x.com/MoraraKebasoSnr/status/1855594379425062936?t=a1bAaiEXelSF3exM6NgkHA&s=19 and https://x.com/MoraraKebasoSnr/status/1855593880495833507?t=AE01ygz1CZdtPZ1jrEZLcg&s=19";
        //as of
        $as_of_ctz = "14 August, 2024";
        //value lost
        $value_lost = "96547300000";
        return response()->json([
            "mda_title" => "Stalled Projects Under Ministries, Departments and Agencies (MDAs)",
            "ctz_title" => "Citizen-Led Oversight on the status of projects countrywide",
            "totalcumulativeContractsAmount(Kshs.)" => $cca,
            "totalcumulativeAmountsPaid (Kshs.)" => $cap,
            "projectsHighlightedmda" => $mda_projects_count,
            "source_mda" => "SUMMARY OF THE AUDITOR-GENERAL'S REPORT ON NATIONAL GOVERNMENT 2022/2023",
            "asOfmda" => $asOfmda,
            'ApproximateValueofTaxpayermoneyLost(Kshs.)' => $value_lost,
            'projectsHighlightedctz' => $citizen_projects_count,
            'source_ctz' => $source,
            'asOfctz' => $as_of_ctz,
        ], 200);

    }

    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
