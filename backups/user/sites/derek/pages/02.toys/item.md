---
title: Toys
blog_url: toys
body_classes: toys
template: listingRegular

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true

feed:
    description: Sample Articles Description
    limit: 10

pagination: true
---
