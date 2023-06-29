---
title:  Exploring the static web
date: 3/17/13
taxonomy:
  category: [articles]
  tag: [design,cms]	
---

Rebuilding my website has never been easy.  This redesign process has been particularly difficult as I not only couldn't decide on how things would look,  but I couldn't even make my mind up about the technology.

Wordpress is superb of course.  But I have always found myself tempted to cut corners by customising other people's templates rather than creating my own from scratch.  This has never endbed well.  Modifying other people's templates has always ended up a bit of a mess, and a mess that I've never properly understood.

I also find the Wordpress web interface slow for adding content compared to more traditional methods, and WYSIWYG annoying and cumbersome.  In fact, my personal experience of Wordpress has been so poor, that it actually stopped me using my site because it was so laborious.  Of course, Wordpress has many advantages too, such as the capability of adding content from any browser with a connection - although I'm not sure I've ever made use of that fact.  

<img src="/assets/images/static.jpg" alt="static websites">

###Dumping Wordpress
Once I decided I would be dumping Wordpress,  I started to look for other small, light content management systems such as Perch and Simple CMS.  This ultimately lead me to wonder why any simple web site should really require a database and php to output basic HTML.  Databases and PHP feels like overkill for adding a few simple articles to a small site.  It creates bloated code, there are security issues, slowdowns with database lookups and the temptation to complicate and mess things up further with a host of badly written plugins.

So that leaves only one alternative really, to create a flat site with no database.  For a short crazy time I even considered revisiting Dreamweaver and using library items.  Fortunately I didn't pursue this very far, as the true horror of templates/library items soon came back to me after Dreamweaver took ages to start, proceeded to filled my code with annoying comments, and then crashed.

###Searching the Static
Next I looked at <a href="http://www.hammerformac.com" target="new">Hammer</a>, together with <a href="http://panic.com/coda/" target="new">Coda2</a> - my favourite editor, and a few different grid systems.  Hammer is great, and I'm sure it will be developed further but there were limitations at the time I started looking at it.  It didn't process LESS, only SASS  and didn't allow for the building of listings or categories. It did, however, do a great job of building templates including common header and footer blocks and the clever paths were very useful.

I was eagerly looking forward to trying <a href="http://mixture.io/" target="new">Mixture.io</a> but this hadn't been released.  After looking around for a while I discovered a very similar project, although not so polished, called <a href="http://www.laktek.com/2012/11/04/embrace-the-static-web-with-punch/">Punch</a>.  Punch looks truly excellent,  but after reading a few comments I saw mention that Punch was merely a missing feature of another application called <a href="http://www.docpad.org" target="new">Docpad</a>.

###Enter Docpad
Docpad uses socket.io and node.  I'm not sure what that actually means, but it seems popular. I do know it processes LESS, SASS, Jade, Coffeescript and a ton of other stuff.  Best of all I love the fact it processes posts created in Markdown, and combinations of markdown and html, simply done by adding .html.md to the end of text files.  It also allows freedom to create different templates, collections and create listing pages of posts automatically.  Best of all it's really easy to setup and understand.  

My old site used to score about 52/100 when tested with <a href="https://developers.google.com/speed/pagespeed/insights" target="new">Google Pagespeed Insights</a>,  it now scores about 94/100 as it's so light weight, despite generally having larger graphics.

Apart from a bit of confusion with a few compiling errors at the outset, Docpad has since been a pleasure to use and allowed me to create a simple and fast site that I fully understand.  It allows me to create posts quickly using Markdown, which I love and is being constantly developed with updates coming through regularly. 

I'd definitely recommend taking a look at open source and FREE <a href="http://www.docpad.org" target="new">Docpad</a> if you want to explore the benefits of a creating a static site.




