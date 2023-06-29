---
title: Music
blog_url: Music
body_classes: music listing
banner: banner1.jpg
template: listingMusic

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 6
    pagination: true

feed:
    description: Sample Music Description
    limit: 6

pagination: true
---
