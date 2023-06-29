---
title: Leigh Howells
blog_url: /
body_classes: home listing
homepage: true
banner: banner2.jpg
bannertext: Twiddling the Cyberspace Information Superhighway since 1994.

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Sample Blog Description
    limit: 10

pagination: true
---