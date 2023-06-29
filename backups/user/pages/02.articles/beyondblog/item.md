---
title: Responsive Design: Beyond the Blog
date: 09-sep-2012
taxonomy:
  category: [articles]
  tag: [design,thoughts]
---

For a lot of smaller websites, responsive design can be a relatively simple case of dealing with different screen widths using media queries.  For the average blog site, this may only involve adjusting a logo, shrinking the navigation, ensuring that images scale and any columns are stacked.  These are usually the examples given in responsive tutorials, and talks about responsive design.

===

Now lets imagine a large, complex University website, such as <a href="http://www.essex.ac.uk/" title="Essex University">Essex Uniersity</a>.  Not everything here is so simple.

![](figure1.png)
Figure 1 - The University of Essex home page design.  There is a lot going on.

I did the user interaction design on this site before this responsive revolution really started to kick off and it features some trickier elements to deal with.

Firstly, it has a header with large &#8216;mega&#8217; menus.  These full width menus pull users deeper to the most important areas of the site and are seen on hover on each of the main navigation items.

![](figure1.png)
Figure 2 - Large hover menus add a lot of options to each main navigation section.

Below thiese, there are four different slide-down panels with complex switchable forms inside, each of which uses custome jQuery to hide and show different panel elements.

![](figure3.png)
Figure 3 - Site wide sliding panels give fast access to the main calls to action.

In addition to these main elements, the content pages often have really lengthy navigation lists to deal with. It&#8217;s a University after all, they always have a lot of information and deep Information architecture.

So how do we deal with all this in a responsive site?  Gulp.  We&#8217;d better start at the top. 

###Time for decisions

On narrow screen and tablet devices in late 2011, touch screens now prevail.  Touch screens, of course, don&#8217;t really have a hover state in their user interaction repertoire.  Safari on iOS may simulate hover with a double touch, but it&#8217;s often not the most usable experience.

Whilst a large hover menu can aid navigation and task orientation on a large complex website when using a desktop machine, on a narrow-screen touch screen device where there is no real hover state these aren&#8217;t such a great solution however much we may tweak them.

More pragmatically, the mega menus and slide down panels are going to be a bitch to make responsive. You have to ask yourself if they are ever going to be suitable for a narrow screen device.  How much time might we spend just trying?  Very quickly, {display: none;} is looking like the intelligent option for these elements.

###Turn off

So, lets turn off the mega menus, and the slide down panels by hiding them.  The narrow screen user can still get to everything without the mega menus of course as they were simply short cuts to enhance the usability.  We can give links to the slide down panels content by creating a different custom header linking to separate pages of forms (we need these separate pages for the non-javascript user anyway).  But this leads us into a bit of a dilemma.

###Is it right to just hide stuff?

In a nutshell it doesn't seem fair, or justifiable to force narrow screen users to pull down large elements which are then immediately hidden.  This slows down the experience, and just doesn't feel right. 

For a site with a relatively simple header, such as <a href="http://www.boagworld.com/" title="Boagworld">Boagworld</a> - this is not such a big issue. Two headers are used, and hidden accordingly using media queries. But they are both very small blocks of code, and share much of the same CSS. Therefore we can afford to be practical, and simply hide one or the other depending on width. 

But with the Essex University example, the set of headers, their html, CSS, images and javascript add up to a lot of completely redundant data being downloaded (possibly not on the best connection in the world) and are then completely ignored.

###Best practice.

Maybe that's fine, we could live with it, and no-one would ever know, (beyond complaining about the speed of the site maybe).  But it doesn't seem like good practice.

A better solutions would involve creating different headers for different width devices in separate blocks of code, and pulling them into our page as required.  This means that mobile users are never forced into pulling down a lot of pointless data.

###Detecting screen widths with JQuery

Whilst our media queries give us the ability to style differently depending on the screen width using CSS,  JQuery allows us to pull in different blocks of html to our templates depending on screen width. This can be achieved by querying  $(window).width()  and using an include file function to pull in the respective html.

###Designing new headers for narrow screen devices.

![](mobile1.png)

My first efforts at making the navigation fit neatly in the narrowest devices seemed like a success to begin with.  Everything was there, and it was all neat and tidy.  Then someone pointed out the blindingly obvious issue.  Can you see the problem?  Yes, basically the entire screen is full of navigation.  As a result every page looks pretty much the same, and it's hard to know where on the site you are.  Bugger.

![](mobile2.png)

For the second version, I used a jQuery plugin developed by <a target="_blank" href="https://github.com/mattkersley" title="Matt Kersley">Matt Kersley</a> which converts any <code>&lt;ol&gt;</code> or <code>&lt;ul&gt;</code> into a <code>&lt;select&gt;</code> creating a drop down navigation list to be created from a long lists of links.  This provided a simple and painless way to deal with the main navigation, freeing up lots of extra space.  Yay.

The same plugin was also used to deal with lengthy subnavigation, the placement of which required users to scroll a long way down the page before they hit the actual content.

###Where do we stop

We could improve things further.  Even with this second solution, a lot of space is wasted with navigation.  We could, for example, intelligently redesign the whole nagivation area into a single Menu button which could pop up all the key navigation options.  Unfortunately, in the real world there is a limit to how much effort and time can we afford to give to techniques which are still in their infancy and we have to stop somewhere.

###Conclusions

Not all sites are going to be simple to make responsive.  The best solutions probably won't be those that force visitors to your site to download lots of uncecessary content which is then hidden to them.  Where possible we should only deliver navigation and content that is appropriate to the device of the user whilst keeping in mind the time and cost that this could add to our projects.

###Yet more conclusions

As an industry we are still deciding on the best approaches, solutions, and techniques for enabling websites to scale  gracefully to different screen widths. This brings new challenges as well as time and cost implications.  We have to make decisions early on in the design process about the best solutions for desktop users, but also how these translate - if at all, to narrow screen device users.  We can simply turn things off, but this needs to be a decision which is as well considered as whether the main navigation is horizonal or vertical.   As part of our design process we should, for example, now be wireframing for narrow screen widths, and design testing the results to get an understanding of how our solutions are being received.
