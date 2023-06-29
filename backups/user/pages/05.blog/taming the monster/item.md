---
title: Taming the Monster
published: true
date: 12-APR-2018
taxonomy:
    category:
        - blog
    tag:
        - design
        - development
---

I converted my little site here to Drupal a few months ago. Yesterday, I'd had enough pain and torment so reverted it back to Grav.

===

### Initial Excitement

I decided to change to Drupal 8 mainly as a learning exercise to get to grips with the Drupal workflow.  I was keen to try the new Twig templating engine under the hood of Drupal 8 and wanted to get better at styling Drupal themes.

In some ways I had also missed the idea of using a database and adding content directly into a live site using a CMS.  With the Grav model, you can do the same, as it has a surprisingly powerful CMS, but I tended to edit local Markdown and upload  when done (I'm doing the same right now).

### Easy but complex

Things were all well and good despite some initial pain with what seemed like very simple things which required overly complex solutions.   In fact this was my biggest issues with Drupal.  Simple things can be difficult and overcomplicated, yet complex things can be relatively simple. The Views module being an excellent example of the latter.

### Downfall

All was well and good until the recent security patches of March 2018.  I attempted the update using the Drupal Composer tool, and everything broke. Horribly.  I then tried to fix what I'd broken and got deeper into complexities and mess.  To cut a long story short, my site didn't work any more.

Having spent way too long trying to fix my local development copy, I finally had enough.  I realised that I didn't have the time nor inclination to be a Drupal back-end developer.  I know people who are, and didn't really want to waste their time with my problems either.

### Giving up

I switched back to Grav in a single evening, and updated all the new/improved styling I'd done on the Drupal site.  So it wasn't a complete waste of effort.   I'm pleased to not have to worry about phpmyadmin any more too, backing up my database, and trying to keep local and remote copies in sync.

Grav still has tremendous benefits to me as a CMS.  It's in some way more fun to use, I seem to have great success in fixing things if I break them, and all my posts, everything, can be committed to Git as separate text markdown files, meaning all my content is version controlled, and not stuck in a database that could decide to break everything at the drop of a hat.

I will still work with Drupal, but in situations where I'm not alone with it in the dark.  It can be a monster.


