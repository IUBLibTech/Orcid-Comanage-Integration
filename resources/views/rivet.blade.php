@extends('layouts.app')

@section('title', 'ORCID Integration')
@section('page-heading')

@endsection

@push('styles')
<style>
@endpush

@section('content')

<div class="rvt-hero">
  <div class="rvt-container-lg">
    <div class="rvt-hero__inner">
      <div class="rvt-hero__body [ rvt-flow ]">
        <span class="rvt-hero__eyebrow">MAKE YOUR SCHOLARSHIP VISIBLE, VERIFIED, AND CONNECTED</span>
        <h1 class="rvt-hero__title">THE ORCID ADVANTAGE</h1>
        <div class="rvt-hero__teaser">
          <p>At Indiana University you can connect your IU identity with your ORCID ID. Connecting your IU identity with your ORCID ID will allow for you to enter information once and reuse it often across multiple systems.</p>
          <p>Ready to connect? Select the button below.</p>
        </div>
        <div class="rvt-hero__actions">
          <a class="rvt-cta rvt-cta--button" href="https://unt.identity.iu.edu/registry/co_petitions/start/coef:6">Get started</a>
        </div>
      </div>
      <div class="rvt-hero__media">
        <img src="{{ asset('images/512px-orcid_id.png') }}" alt="ORCID logo" style="width: 300px; height: 300px; display: block; margin: 0 auto;">
        <!-- <div class="rvt-hero__media-caption">An optional image caption</div> -->
      </div>
    </div>
  </div>
</div>

<div class="rvt-container-xl" style="background-color:#243142;max-width:unset;padding:56px 50px;">
<div class="rvt-row row-flex">
    <div class="rvt-cols-8-md">
    <div class="rvt-row row-flex">
    <div class="rvt-cols-6-md">
        <div class="rvt-prose-offset" style="padding-right:20px;">
        <h4>Learn more about ORCID</h4>
                <p>An ORCID iD (Open Researcher and Contributor ID) is a unique, persistent identifier that helps differentiates you from other researchers which helps to facilitate online discovery and better recognition of your work.&nbsp;</p><p>ORCID is the industry standard for identity management and personal information transfer in the scholarly ecosystem. It ensures that your work is correctly attributed to you and can be linked with many funder, publisher, and research information management systems.&nbsp;</p><p>Want to learn even more? Visit our <a href="https://guides.libraries.indiana.edu/ORCID-IU" rel="noopener" target="_blank" class="external">ORCID @ IU</a> guide.</p>
                </div>
        </div>

        <div class="rvt-cols-6-md">
            <div class="rvt-prose-offset">
             <h4>Things to know</h4>
                <p>Connecting your ORCID iD can make it easier to work with:</p>
                        <ul><li>Grant submission, tracking, and management systems</li>
                        <li>Publisher submission systems</li>
                        <li>Scholarly networks, repositories, and current research information systems</li></ul>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="rvt-container-lg rvt-p-tb-xl rvt-p-tb-3-xl-md-up">
        <h4>Questions?</h4>
            <p style="font-size: 1.125rem;line-height: 1.65;">If you have questions about getting an ORCID, how it will be used by IU, or any other related questions, please contact us at <a href="mailto:orcidin@iu.edu" class="external">orcidin@iu.edu</a>.</p>


            <p style="font-size: 1.125rem;line-height: 1.65;">ORCID membership is brought to you by <a href="https://libraries.indiana.edu/" class="external">Indiana University Bloomington Libraries</a> and <a href="https://library.indianapolis.iu.edu/" class="external">Indiana University Indianapolis University Library.</a>&nbsp;Work on integrations are done in partnership with <a href="https://uits.iu.edu/" class="external">University Information Technology Services (UITS)</a>.</p>
</div>
@endsection

