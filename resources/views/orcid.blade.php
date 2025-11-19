@extends('layouts.app')

@section('title', 'ORCID Profile')
@section('page-heading')
    <h1 class="rvt-m-top-md rvt-m-bottom-md">ORCID Profile</h1>
@endsection

@push('styles')
    {{-- place page-specific CSS if needed --}}
@endpush

@section('content')
@php($status = $status ?? session('status') ?? null)
@if($status === 'error')
    <div class="alert alert-danger">
        <strong>Error:</strong> {{ $error ?? 'An error occurred.' }}<br>
        @if(!empty($code)) <strong>Status:</strong> {{ $code }}<br> @endif
        @if(!empty($message)) <strong>Message:</strong> {{ $message }} @endif
    </div>
@endif

@if($status === 'success')
    <div class="alert alert-success">
        <strong>ORCID ID:</strong> {{ $orcid }}<br>
        <ul>
        <li><strong>Credit Name:</strong> {{ $data['credit-name'] ?? 'N/A' }}</li>
        <li><strong>ORCID iD:</strong>
            <a href="{{ $data['orcid-identifier']['uri'] ?? '#' }}" target="_blank">
                {{ $data['orcid-identifier']['path'] ?? 'Unknown' }}
            </a>
        </li>
        <li><strong>ORCID Host:</strong> {{ $data['orcid-identifier']['host'] ?? 'N/A' }}</li>
        <li>
        <strong>Created:</strong>
        {{ isset($data['created-date']['value']) 
        ? \Carbon\Carbon::createFromTimestampMs($data['created-date']['value'])->toDayDateTimeString() 
        : 'Unknown' }}
        </li>
        <li>
         <strong>Updated:</strong>
        {{ isset($data['last-modified-date']['value']) 
        ? \Carbon\Carbon::createFromTimestampMs($data['last-modified-date']['value'])->toDayDateTimeString() 
        : 'Unknown' }}
        </li>
    </ul>
@endif

@if(!empty($raw_json))
    <pre>{{ $raw_json }}</pre>
@endif

@endsection
