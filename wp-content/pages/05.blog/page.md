---
title: Blog
blog_url: blog
body_classes: blog listing
banner: banner1.jpg
template: listingBlog

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items:
        '@self.descendants': ['/blog', true]
    order:
        by: date
        dir: desc
    limit: 30
    pagination: true

feed:
    description: Sample Blog Description
    limit: 30

pagination: true
---
