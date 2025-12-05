<?php

namespace App\Http\Controllers;

use App\Models\OrcidAccess;
use Illuminate\Support\Facades\Http;

class OrcidApiController extends Controller
{
    public function fetchByOrcid()
    {

    $username = app('cas.username');

        // Find the matching ORCID record
        $record = OrcidAccess::where('name', $username)
    		->latest()
    		->first();

        if (!$record) {
            return view('orcid', [
                'status'   => 'error',
                'data'     => null,
                'error'    => 'ORCID record not found.',
                'code'     => 404,
                'message'  => 'The requested ORCID record could not be found.',
                'raw_json' => json_encode(['error' => 'ORCID record not found.', 'status' => 404], JSON_PRETTY_PRINT),
            ], 404);
        }

        $accessToken = $record->access_token ?? null;
        $orcidId     = $record->orcid ?? null;   

        if (empty($accessToken) || empty($orcidId)) {
            return view('orcid', [
                'status'   => 'error',
                'orcid'    => $orcidId,
                'data'     => null,
                'error'    => 'Missing access token or ORCID iD.',
                'code'     => 401,
                'message'  => 'Both access token and ORCID iD are required to call the ORCID API.',
                'raw_json' => json_encode(['error' => 'Missing token or ORCID'], JSON_PRETTY_PRINT),
            ], 401);
        }

        // API requests
     	$responseSummary = Http::withToken($accessToken)
    	->accept('application/json')
    	->get("https://api.sandbox.orcid.org/v3.0/{$orcidId}/summary");

	$responseWorks = Http::withToken($accessToken)
    	->accept('application/json')
    	->get("https://api.sandbox.orcid.org/v3.0/{$orcidId}/works");

	return view('orcid', [
    		'orcid'   => $orcidId,
    		'summary' => $responseSummary->json(),   // decoded array
    		'works'   => $responseWorks->json(),     // decoded array
	]);
	
    }
}
