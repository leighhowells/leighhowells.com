---
title: Articles
blog_url: articles
body_classes: articles listing
banner: banner1.jpg
template: listingArticles

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