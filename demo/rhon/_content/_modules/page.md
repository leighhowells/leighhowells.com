---
title: 
_template: landingModules
_fieldset: page
---

<style>
	
	h1.this {
		clear: left !important;
		margin: 40px 0 40px 0;
		color: black;
		background: #444;
		color: white;
		padding: 10px;
		z-index: 0;
		font-size: 1.8em;
	}
	
	* { border-top: none !important;
	border-bottom: none !important;
	}
	.fullwidth { float: none;}
	.half { float: none;}

</style>


<h1 class="this">Donation Module</h1>
{{ theme:partial src="donation" }}


<h1 class="this">Detailed Donation Module</h1>
{{ theme:partial src="donationDetail" }}




<h1 class="this">Headings Module</h1>

#Heading Level 1
##Heading Level 2
###Heading Level 3
####Heading Level 4

<h1 class="this">Unordered List Module</h1>

<h3>Unordered bulleted List</h3>

- list item
- list item 
- list item 
- list item
- list item 
- list item 
- list item
- list item 
- list item 



<h1 class="this">Landing Banner Module</h1>

{{ theme:partial src="landingBanner" }}


<h1 class="this">Gallery Module</h1>
{{ theme:partial src="gallery" }}


<h1 class="this">Related Link Content Module</h1>
{{ theme:partial src="relatedLinkContent" heading="In content related link"}}


<h1 class="this">Related Link Major Module</h1>
{{ theme:partial src="relatedLinkMajor" heading="In content related link"}}


<h1 class="this">Related Link Minor Module</h1>
{{ theme:partial src="relatedLinkMinor" heading="In content related link"}}

<div style="clear:left"></div>

<h1 class="this">Order List Module</h1>

<h3>Ordered bulleted List</h3>

1. list item
1. list item
1. list item 
1. list item
1. list item
1. list item 
1. list item
1. list item
1. list item 


<h1 class="this">Example Image Positions</h1>

{{ theme:partial src="images" }}


<h1 class="this">Responsive Video Module</h1>
{{ theme:partial src="video" }}


<h1 class="this">Responsive Audio Module</h1>
{{ theme:partial src="audio" }}


<h1 class="this">Blockquote Module</h1>
{{ theme:partial src="blockquote" }}


<h1 class="this">Tabular data Module</h1>
{{ theme:partial src="table" }}






<h1 class="this">Featured Tweet Module</h1>

{{ theme:partial src="tweet" }}

<div style="clear:left; margin-bottom:20px"></div>
A copy and pasted featured Tweet into the CMS with a style - rather than any twitter/API embed coding.



<h1 class="this">Twitter Embed Module</h1>

{{ theme:partial src="twitterembed" }}


<div style="clear:left; margin-bottom:20px"></div>
NOTES:  Use standard Twitter embed for user/hashtag etc - with light or dark theme, with background coloured layer to match theme and width to match container area.   Might be best to set the maximum number of tweets to no more than 3 or 4 using data-tweet-limit="4" option.  With all tweets in the embed visible (20 by default) - the scrolling panel is used as above, with can be difficult to use and pulls more content into the page.

<div style="display: block; clear:left; margin-bottom: 20px;"></div>

<h1 class="this">Follow On Twitter/Facebook</h1>

{{ theme:partial src="twitterfollow" }}







<h1 class="this">Basic Form Module</h1>
{{ theme:partial src="form" }}


<h1 class="this">Sharing Module</h1>
{{ theme:partial src="share" }}


<h1 class="this">Contact Module</h1>
{{ theme:partial src="contact" }}


<h1 class="this">FAQ Module</h1>
{{ theme:partial src="listingFaq" }}

<h1 class="this">News Listing Item Module</h1>
{{ theme:partial src="listingNews" }}

<h1 class="this">News Listing (Small) Item Module</h1>
{{ theme:partial src="listingNewsSmall" }}

<h1 class="this">Event Listing Item Module</h1>
{{ theme:partial src="listingEvent" }}

<h1 class="this">Person Listing Item Module</h1>
{{ theme:partial src="listingPerson" }}

<h1 class="this">App Listing Item Module</h1>
{{ theme:partial src="listingApp" }}

<h1 class="this">Download Module</h1>
{{ theme:partial src="contentDownload" heading="Annual Report 2014" }}


<h1 class="this">Appeal Total Module</h1>
{{ theme:partial src="appealTotal" }}


<h1 class="this">Product Listing Module</h1>
{{ theme:partial src="listingProduct" }}
<div style="clear:left;"></div>


<h1 class="this">Contact Location Module</h1>
{{ theme:partial src="locations" }}


<h1 class="this">Map Module</h1>
{{ theme:partial src="map" }}


<h1 class="this">Filter Module</h1>
{{ theme:partial src="filter" }}


<h1 class="this">Call to Action Module</h1>
{{ theme:partial src="calltoaction" heading="Call to Action Thing!"}}








