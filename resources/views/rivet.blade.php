@extends('layouts.app')

@section('title', 'COmanage / ORCID')
@section('page-heading')
    <h1 class="rvt-m-top-md rvt-m-bottom-md">COmanage — ORCID Integration</h1>
@endsection

@push('styles')
    {{-- page-specific CSS if needed --}}
@endpush

@section('content')
                <div class="rvt-flow rvt-prose">
		  
	<p>Comanage Registry is an identity management system that facilitates enrollment and lifecycle management within collaborative organizations. IU's Identity Management Services is implementing this system as an integration with IU Login.</p> 
            
            <p>The Comanage Registry includes an ORCID Source plugin designed to integrate with the ORCID API, allowing organizations to securely link ORCID iDs to their COmanage records. The Orcid Source plugin was recently upgraded to work with ORCID's member API. </p>
            <p>This is a test application for expanding the Comanage Registry capability in order to query from and post data to individual ORCID records.</p>
            <ul><li>We will obtain invidiual IDs (and permission access tokens) through the Comanage Registry workflow</li>
            <li>Use these access tokens in other university systems (i.e, such as this test application) to read/write to ORCID Records</li> 
            <li>Each university system with this protocol would use the same ORCID API member ID embedded in Comanage
            <ul><li>Permissions granted by individuals will be collected only through COmanage flows</li> 
            <li>Standalone IU systems will use these permissions in the form of access tokens to read/write ORCID records</li></ul>
            </li></ul>
    <hr>
	    <p class-"rvt-m-top-sm"> <strong>Individual researchers</strong>:</p> 
<p>Click to authorize IU as a trusted party read & write access to your ORCID record </p> 
<div>  
 <a href="https://unt.identity.iu.edu/registry/co_petitions/start/coef:6">
<button type="button" class="rvt-button">
<span>Begin</span>
<svg class="rvt-icon-link-external" fill="currentColor" width="13" height="13" viewBox="0 0 16 16"><path d="M15 1H9v2h2.586l-3 3L10 7.414l3-3V7h2V1Z"></path><path d="M7 3H1v12h12V9h-2v4H3V5h4V3Z"></path></svg>
</button></a></div>
<div>
<p class-"rvt-m-top-sm"> <strong>Please be patient</strong>:</p>
<ul>
<li>You will be redirected and may be asked to log in.</li> 
<li>The initial processing by the Comanage Registry will take several seconds.</li> 
<li>Sign in and authorize ORCID when prompted.</li>
<li>If testing, use <i>@mailinator.com</i> credentials.</i>
</ul>
<p>Comanage will process the enrollment request and send users to ORCID to authorize the permissions.</p>

    <hr>

<p>Note: The data posted here is derived from a development instance of the Comanage Registry and the ORCID sandbox. It's included for demonstration purposes only. This dev site is restricted to IU Login users.</p> 
        </div>
    </div>
@endsection
