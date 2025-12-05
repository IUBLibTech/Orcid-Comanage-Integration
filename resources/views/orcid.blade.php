@extends('layouts.app')

@section('title', 'ORCID Profile')
@section('page-heading')
    <h1 class="rvt-m-top-md rvt-m-bottom-md">ORCID Profile</h1>
@endsection

@push('styles')
    {{-- place page-specific CSS if needed --}}
@endpush

@section('content')
{{-- SUMMARY --}}
<h2>ORCID Summary</h2>

<p><strong>Name:</strong> {{ $summary['credit-name'] ?? '' }}</p>

<p><strong>ORCID iD:</strong>
    <a href="{{ $summary['orcid-identifier']['uri'] ?? '' }}" target="_blank">
        {{ $summary['orcid-identifier']['path'] ?? '' }}
    </a>
</p>

<h3>Employment</h3>
@if(!empty($summary['employments']['employment']))
    <ul>
        @foreach($summary['employments']['employment'] as $job)
            <li>
                <strong>Institution:</strong> {{ $job['organization-name'] }}<br>
                <strong>Role:</strong> {{ $job['role'] ?? '—' }}
            </li>
        @endforeach
    </ul>
@else
    <p>No employment records found.</p>
@endif

<h3>Counts</h3>
<ul>
    <li><strong>Works:</strong> {{ $summary['works']['self-asserted-count'] ?? 0 }}</li>
    <li><strong>Fundings:</strong> {{ $summary['fundings']['self-asserted-count'] ?? 0 }}</li>
    <li><strong>Peer Reviews:</strong> {{ $summary['peer-reviews']['total'] ?? 0 }}</li>
    <li><strong>Education:</strong> {{ $summary['education-qualifications']['count'] ?? 0 }}</li>
</ul>



{{-- WORKS --}}
<h2 class="works">Works (Publications)</h2>
@if(!empty($works['group']))
@foreach($works['group'] as $group)
    @foreach($group['work-summary'] as $work)

        @php
            // AUTHOR
            $author = $work['source']['source-name']['value'] ?? '';

            // TITLE
            $title = $work['title']['title']['value'] ?? '';

            // JOURNAL
            $journal = $work['journal-title']['value'] ?? '';

            // PUBLICATION DATE
            $year  = $work['publication-date']['year']['value'] ?? '';
            $month = $work['publication-date']['month']['value'] ?? '';
            $day   = $work['publication-date']['day']['value'] ?? '';

            // Format YYYY-MM-DD (omit missing parts)
            $date = trim("$year" . ($month ? "-$month" : "") . ($day ? "-$day" : ""), "-");

            // DOI (if exists)
            $doiObj = collect($work['external-ids']['external-id'])
                        ->firstWhere('external-id-type', 'doi');
            $doi = $doiObj['external-id-value'] ?? '';
            $doiUrl = $doiObj['external-id-url']['value'] ?? '';

            // Build Chicago-style citation
            $citation = '';
            if ($author) $citation .= $author . '. ';
            if ($title) $citation .= '"' . $title . '." ';
            if ($journal) $citation .= "<em>$journal</em>. ";
            if ($year) $citation .= $year . '. ';
            if ($doiUrl) $citation .= $doiUrl;
        @endphp

        <p style="margin-bottom: 1.2rem;">{!! $citation !!}</p>

    @endforeach
@endforeach
@else
    <p>No publications found.</p>
@endif
@endsection
