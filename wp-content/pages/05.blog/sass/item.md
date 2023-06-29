---
title: Sass Functions!
date: 6/9/15
taxonomy:
  category:  journal
---

Today was my first attempt venture into Sass functions. So damned useful! I can't remember where I got it from, but it's so very useful and I hve been actively avoiding finding out about it.

This simple function is really helpful for experimenting with colours - epecially useful when designing in code:

```
@function set-text-color($color) {  
   @if (lightness($color) > 50) {   
     @return #000000; // Lighter backgorund, return dark color   
      }  @else {   
            @return #efefef; // Darker background, return light color   
      }
}
```

This basically means that I can change the background colour of a thing, and the choice of dark or white text can be automatically decided by Sass.