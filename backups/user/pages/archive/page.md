---
title: Ancient Wonders
body_classes: archive
template: listingArchive
masthead: yes

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 12
    pagination: true

pagination: true
---