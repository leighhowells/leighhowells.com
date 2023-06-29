---
title: Goodbye Statamic. Hello Grav.
published: true
date: 11-APR-2016
taxonomy:
    category:
        - articles
    tag:
        - design
        - development
slug: byebye
summary:
    enabled: '1'
    format: short
---

A couple of years ago I made the move away from [Wordpress](http://www.wordpress.com) and the unruly MySQL database for my personal site, and decided to embrace the static site.

===

At first I was really excited by a app called [Docpad](http://docpad.org/), which worked in a similar way to [Jekyll](https://jekyllrb.com/), i.e. processing pages and outputting purely flat html/css/js files.

Docpad worked for a while, but suffered from a few issues that I couldn't work around.  Firstly, it was generated from the command line and would often seem to throw errors which were incomprehensible.  The main problem though was that whenever I added a page, the whole site would need to be generated and any files that had changed (often, many due to listing pages etc) would need to all be uploaded.  It was hard keeping track of these files and it took longer and longer to generate the site.   Another niggling problem, was the lack of any kind of backend admin pages.  This meant that I could only ever add pages from my Mac, and no other option was possible.  Basically, it was clunky and for me, slow.

Then I discovered [Statamic](https://statamic.com/).  The name combines static and dynamic, as again it uses markdown files, but rather than generating the site to html files each time pages change, it uses php to dynamically add pages, update listings, tags etc.  I was perfectly happy with this way of working, and as a bonus Statamic offered a really nice set of admin pages, which could easily be customised for new page collections.

[Statamic](https://statamic.com/) wasn't free, but was only a small $29 fee for a site license.  Recently, the guys behind Statamic updated to version 2.  Unfortunately, there was a major price hike moving to version 2, of what appears to be $199 - which I wasn't really prepared to pay.  In addition, I've never had a search solution for Statamic without shelling out another $100 for a search plugin.

<span class="borderless">
![](grav.png)
</span>

Whilst looking for other options, I stumbled upon [Grav](http://getgrav.org), which as far as I've been able to tell is incredibly similar to Statamic.  It has a really nice admin interface, plugins including search, and best of all it's completely free.  The community seems strong, and I've not had too many issues trying to find help.   It took me the best part of a day to switch my little site here from Statamic to Grav, and I'm really pleased with the results.

So if you want a free, dynamic site that doesn't use a database, but instead uses the power of markdown and yaml, has multiple taxonomies, search and a really nice admin interface, I'd definitely recommend checking out Grav.

