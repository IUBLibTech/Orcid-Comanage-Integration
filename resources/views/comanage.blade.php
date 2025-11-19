@extends('layouts.app')

@section('title', 'COmanage / ORCID')
@section('page-heading')
    <h1 class="rvt-m-top-md rvt-m-bottom-md">COmanage — ORCID Integration</h1>
@endsection

@push('styles')
    {{-- page-specific CSS if needed --}}
@endpush

@section('content')
<div class="rvt-alert rvt-alert--info" role="alert" aria-labelledby="information-alert-title" data-rvt-alert="info">
  <p class="rvt-alert__message">TO DO: Add spinner while page load is pending.</p>
</div>
<div>    
{{-- <p>rshiggin’s ORCID ID is: 0009-0007-3710-796X</p> --}}
</div>

<h2 style="margin-top:2rem; margin-bottom:1 rem;">Access Token saved</h2>
@if(session('status') === 'success' || isset($savedRecords))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
        <ul>
            @foreach($savedRecords as $record)
                <li>ORCID: {{ $record->orcid }}</li>
                <li>Name: {{ $record->name }}</li>
                <li>Updated at: {{ $record->updated_at->format('Y-m-d H:i:s') }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach(session('errors') as $error)
                <li>Row {{ $error['row'] ?? '?' }}: {{ $error['error'] }}</li>
            @endforeach
        </ul>
    </div>
@endif
<p>This data will be stored in an integration application like this one in order to query ORCID with an "access token" instead of a member API key</p>
	</div> 
 </div>
<div>
<p>Click to view a summary of your ORCID record.</p>
<a href="/orcid">
<button class="rvt-cta rvt-cta--button">
<span>View</span>
</button>
</a>
</div>
    {{-- Raw JSON for debugging (optional) --}}
    {{-- Uncomment when you need to debug --}}
    @if(!empty($raw_json))
        <section class="rvt-m-top-md">
            <h3>Raw JSON</h3>
            <pre>{{ $raw_json }}</pre>
        </section>
    @endif
@endsection
