---
title: Yes, the Next Project Will Be Perfect!
date: 3/9/14
taxonomy:
  category: [articles]
  tag: [thoughts,design]	
---

During every big project I work on, I seem to spend a lot of time thinking through how the nebxt one will be SO&nbsp;much better. &nbsp;It's always going to be perfect, next time.

===


### Designing in code

The project I'm working on at the moment is the first site I've designed completely&nbsp;in the browser using HTML/CSS. There are no Photoshop/Fireworks design files. I also rejected all products like&nbsp;
	<a href="http://macaw.co/">MACAW</a> (that I&nbsp;<a href="http://www.leighhowells.com/blog/codesign-tools" target="_blank">gushed about previously</a>) as actually&nbsp;being a hinderance rather than helpful.   

Even though I'm fundamentally&nbsp;a designer not a coder,&nbsp;I'm going to persevere with this approach going forward&nbsp;- with perhaps a little more sketching to get things started. It can seem painful at first, but with time the process speeds up. &nbsp;All those latter design changes and final&nbsp;tweaks are a positive delight to do in the code rather than across many Photoshop pages.   

The code doesn't have to be great. In fact, I'm currently considering it disposable. &nbsp;Just as Photoshop / Fireworks files are disposable (and take up far more disk space in the process). Longer term this may change.   

### SASS / Compass / Susy 

I will continue to use 
	<a href="http://sass-lang.com/" target="_blank">SASS</a> and get better. &nbsp;SASS&nbsp;gives the power to store palette settings in variables and use maths to create intelligent, justifiable colour combinations and variations (as well as a ton of other&nbsp;advantages).

Using
	<a href="http://compass-style.org/" target="_blank">Compass</a> was a great aid to designing in the browser this time.&nbsp;&nbsp;It speeds up the creation of high fidelity design by adding a powerful set of mixins for quickly creating&nbsp;gradients, rounding, shadows etc. &nbsp;Next time I will know it better, and remember to use it.
</p>
<p>
	<a href="http://susy.oddbird.net/" target="_blank">Susy</a> offers a powerful, flexible SASS grid system without the bloat associated with full-blown frameworks. I've not used it yet, but hopefully it will ease some of the&nbsp;fiddling that went on this time with my custom grid, and&nbsp;make things faster when it comes to layout experimentation.
</p>
<h3>Live reload</h3>
<p>
	Next time I will ensure I have live reload working&nbsp;as I style. &nbsp;This started well with my current project Using&nbsp;
	<a href="https://incident57.com/codekit/" target="_blank">Codekit</a> and a Chrome extension, but it stopped working and I never invested the time to fix it.&nbsp;&nbsp;Ideally this would be across devices too, as I've seen demonstrated with&nbsp;<a href="http://vanamco.com/ghostlab/" target="_blank">GhostLab</a>. &nbsp; I've heard a lot of good things about using&nbsp;<a href="http://gruntjs.com/" target="_blank">Grunt</a> for this purpose&nbsp;too, so may have to explore the possibilities there.
</p>
<h3>Systems not templates</h3>
<p>
	I must&nbsp;stop designing and thinking in terms&nbsp;of individual&nbsp;page templates. &nbsp;Instead I need to think and&nbsp;design in terms of&nbsp;'modules' or blocks of elements&nbsp;that can work as part of a greater system of pages - the 'atomic' principle as Brad Frost called it. &nbsp;
</p>
<blockquote>
	We’re not designing pages, we’re designing systems of components.&mdash;Stephen Hay
</blockquote>
<h3>Pattern Library</h3>
<p>
	This modular / atomic / system approach needs to be documented and recorded&nbsp;as the project progresses, rather than at the end using an intelligent process that I haven't yet worked out.
</p>
<h3>Modularisation with PHP</h3>
<p>
	PHP allows me to break up the design code into intelligent modules so no part of the design needs repeating. It allows text variables for common content elements if needed and tons of functionality for creating design prototypes.  I will do this better next time.
</p>
<h3>GIT</h3>
<p>
Designing in the browser means that my design is mostly code and small assets.  This can be kept in a&nbsp;
	<a href="http://git-scm.com/" target="_blank">GIT repository</a> and be version controlled and shared with co-workers. (OK so there MAY be a couple of small Photoshop/Illustrator files for any specific artwork, but that will depend on the project). &nbsp;My current project I used GIT to store the code, but kept forgetting about it. &nbsp;I will try harder next time.
</p>
<p>
	No more lost work as Adobe software crashes under the strain.
</p>
<h3>Content first</h3>
<p>
	I will use&nbsp;
	<a href="http://statamic.com/" target="_blank">Statamic</a> to put together a&nbsp;mini&nbsp;site using actual content.  Statamic allows fast creation of content sections and taxonomies using simple&nbsp;<a href="http://daringfireball.net/projects/markdown/" target="_blank">markdown</a> files.  This mini site will be fully navigable and utilise&nbsp;a wide selection of actual content covering extreme cases to inform the design more accurately. &nbsp;
</p>
<p>
	Unlike other flat file systems I've used such as&nbsp;
	<a href="http://jekyllrb.com/" target="_blank">Jekyll</a> and&nbsp;<a href="http://docpad.org/" target="_blank">Docpad</a>, Statamic does not need to be 'generated' - as this is done on the fly with PHP, making the whole process seamless, and a little magical. &nbsp;Markdown pages can be added, and they instantly form&nbsp;part of the content/IA.
</p>
<h3>HTML wireframes</h3>
<p>
	I've been using&nbsp;
	<a href="http://www.axure.com/" target="_blank">Axure</a> for several years for creating interactive wireframes.  Trying to wireframe responsively has&nbsp;proved to be so painful in Axure (and every other way I've tried) that it simply makes no sense any longer.&nbsp;
</p>
<p>
	 The&nbsp;
	<a href="http://susy.oddbird.net/" target="_blank">Susy</a> grid, SASS and HTML make responsive wire framing much simpler. &nbsp;In my next project my Statamic content site will become the responsive wireframe, then get skinned and progressively enhanced.
</p>
<h3>Wearable up</h3>
<p>
	I will create the extra narrow mobile layout design first.  This is what the client will see first too.  They will get used to thinking about their new&nbsp;site from the smallest screens upwards.  The client will prioritise their content accordingly and understand how content moves from mobile up to very large desktop widths.
</p>
<p>
	Clients must not be so focussed on the desktop.  It's what they've come to expect to see as their working day is spent looking at sites on desktop machines.&nbsp;They must stop thinking like this.   They will see the desktop layout emerge&nbsp;as the design is progressively enhanced and the screen gets wider. &nbsp;At that point&nbsp;much more important issues will have already&nbsp;been decided upon.
</p>
<h3>Simpler is better</h3>
<p>
	I've already rejected mega menus and&nbsp;carousels from future projects (where I can help it). &nbsp;These are cumbersome and lazy. &nbsp;If navigation can't be expressed simply on limited screen devices, then it needs rethinking. &nbsp;
</p>
<p>
	If something is important enough to be featured in a carousel, why then hide it? In my experience, carousels are mostly used to keep marketing people, and those who can't prioritise content, happy. They also make little sense at mobile, in terms of layout, usability and download size.
</p>
<p>
	I will take simpler approaches to solving design and usability problems. &nbsp;This will enhance user experience not detract from it.
</p>
<h3>URLs not JPGs</h3>
<p>
	In my current project I failed to design mobile up - in fact I went a bit mad and did the complete opposite - a super-wide 1600px layout first.  As a result I could not give my client a simple URL to demonstrate the design, as my responsive considerations (even at regular desktop widths) were a little&nbsp;half-baked. I was also worried about browser issues and used&nbsp;
	<a href="https://chrome.google.com/webstore/detail/awesome-screenshot-captur/alelhddbbhepgpmgidjdcjakblofbmce?hl=en" target="_blank">Awesome screenshot</a> for Chrome to output full page jpegs (which is what they would have received from Photoshop).&nbsp;
</p>
<p>
Next time, clients will be instructed to use their mobiles to look at the initial mobile designs and&nbsp;Chrome or Safari to look at desktop width designs. &nbsp;They will do this looking at URLs not at&nbsp;pictures.
</p>
<h3>Finally</h3>
<p>
In my next project my client will not be allowed to upload images with text on using their&nbsp;CMS. There will be a clear note of this in the CMS "Do not upload images with text on&nbsp;- IT IS AGAINST THE LAW !! (ok, will probably explain the lack of accessibility and spidering&nbsp;etc).&nbsp; If only there were cleverer ways to stop this using OCR as a test.
</p>
<p>
If text is important and useful it should be actual text.  If it has been forced into an image, there must be a fundamental&nbsp;problem in the layout of other elements on that page. &nbsp;&nbsp;
</p>
<p>
	After a project is complete, once all of the&nbsp;design justification and negotiation is done with, the sudden appearance of huge, purple, Comic Sans on a home page banner&nbsp;makes a mockery of the whole design process.
</p>
<h3>Next time</h3>
<p>
	Ok so&nbsp;my&nbsp;next project won't be perfect either. &nbsp;But in&nbsp;each new&nbsp;project we must attempt incremental improvements as the landscape beneath us changes.&nbsp;
</p>
<p>
 As the web constantly&nbsp;evolves, so must our design process and the way we think as designers.
</p>