<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="First page"/>
        <meta name="og:description" content="ORCID-Comanage">
        <meta property="og:url" content="https://orcid-dev.dlib.indiana.edu/" />
        <meta property="og:image" content="https:/path/to/image"/>
        <meta property="og:image:width" content="768" />
        <meta property="og:image:height" content="512" />
        <link href="https://assets.iu.edu/favicon.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.9.1/css/rivet.min.css">
	<style>
	body {
    	  min-height: 100vh;
          display: flex;
          flex-direction: column;
	}

	main {
          flex: 1;
	}
	@supports (aspect-ratio: 1/1) {
    	  .rvt-hero__media img {
            aspect-ratio: 1 / 1 !important;
     		}
  	}	
      .rvt-prose-offset {
	  color:#fff;
	  font-size: 1.125rem;
          line-height: 1.65;
	}
      .rvt-prose-offset a {
       	  color:#8ed7f1;
	}
       .rvt-prose-offset a:hover {
          color: #3ab7e4;
	}
       .row-flex {
    	  display: flex;
          flex-wrap: wrap;
          margin-right: -0.75rem;
          margin-left: -0.75rem;
          padding-left: 0;
          align-content: center;
          justify-content: center;
       }
	h1 {
	  font-size: 1.7rem;
          font-weight: 700;
       }
	h2 {
           font-size: 1.5rem;
	   font-weight: 700;
       }
	h4 {
          font-size: 1.5rem;
        }
    </style>
    </head>

