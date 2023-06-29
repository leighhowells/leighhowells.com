---
title: Designs
blog_url: design
body_classes: design listing
banner: banner1.jpg
template: listingDesign

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

feed:
    description: Sample Design Description
    limit: 12

pagination: true
---
