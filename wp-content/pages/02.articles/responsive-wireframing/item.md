---
title:  Responsive Wireframing
date: 1/28/2012
taxonomy:
  category: [articles]
  tag: [ux,design]	
---

I am conscious that some people in the web industry, including myself may be getting tired of hearing the word ‘responsive’ in everything they read. We shouldn’t be, because I don’t think it’s going to change any time soon (not until the next big web paradigm shift at least) and mobile will only become more important as time goes on and the device numbers grow and they technology evolves.

Get used to it. We, the content designers, have to be just as responsive as the interfaces we create, adapting to change as it happens. To do this we need to learn to think differently.

### Responsive thinking

We now have to design and think responsively.  Our layouts and our pages need to gracefully fit the device they are being viewed on. Whilst they don’t necessarily have to be perfect in all browsers across all devices, they do have to look good and present a better user experience when compared to pinching and zooming a mobile browser rendering our pages at desktop size. With statistics on mobile browsing indicating that more people will soon be accessing the web from mobile than from desktop, we have to think carefully right from the beginning of any new site we design.
This presents a new challenge.  If we are going to wire-frame our site designs, then we need to think and therefore wire-frame them polymorphically, i.e. they will change shape in different situations. As we consider and add elements to what is basically the blueprint for our design, we have to ensure that everything can morph gracefully to higher and lower resolutions. Changing layout as necessary, making use of wider resolutions more effectively and possibly omitting some of the content altogether at lower resolutions (a last resort of course).

Therefore, if we wireframe this…

<img src="/assets/images/a1.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

then we really need to also show this in our wire-frames for a portrait 768pixel wide table view:

<img src="/assets/images/b.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

down to this on a mobile phone portrait width:

<img src="/assets/images/c.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

We can’t just make assumptions about how the site will adapt and leave clients in the dark about these decisions as we continue development regardless.
Mobile first

We can’t continue to think through the wire framing process from a blinkered desktop perspective.  It’s not going to be easy though. Many of us spent years advocating fixing width or maximum 960px width designs. The thought of our previously rigid designs suddenly being unbuckled and able to jump around and change layout can be unsettling.

Really, we need to start our wire-framing from narrow widths outwards, or ‘mobile first’ ensuring that we can serve our content to the lowest common denominator and expand on this progressively as more resolution becomes available to work with on wider screens.

From now on we need to mentally deconstruct our site as we create our wire-frames, mentally breaking it down into columns and elements that can not only exist side by side, but also above and below each other. There is no fixed inter-relationship any more. By starting with narrow screen devices we can ensure we solve narrow width problems first rather than running into them later on when time may be short.
Design constraints

Try as we might, there is no getting away from the fact that responsive thinking challenges our design options and certain approaches will not be as easy to implement as easily as others. Strong grid designs morph more readily as we down-sample the grid to single columns more easily than a more organic design. Also, even numbers of columns provide easier wrapping options than odd numbers of columns. For example, expanding a single column narrow site to a wide design with 5 columns could present more of a challenge than a design which expands to 6 columns. A 6 column design allows column steps of 1 X 6, 2 X 3, 3X2, then 6 X 1 columns… whereas a 5 columns would be uneven – 1 X 5, 5 X 1 with no even steps in between. Of course, we have every opportunity to switch our grid at different breakpoints, but this inflicts a further development overhead.

### Wire-framing compromises

If our desktop layout has a major call to action in the right hand column, where the middle column isn’t actually as important as either column 1 or the call to action:

<img src="/assets/images/3by1.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

is it necessarily right that we mechanically do this?

<img src="/assets/images/3by1b.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

This may be the natural response of stacking columns left to right and this may be the result if there is little thought applied to how things transpire in a narrow resolution. This may be a more appropriate solution:

<img src="/assets/images/3by1c.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

In addition to considering it ourselves and any html consequences of moving content around at different breakpoints, we also need to demonstrate to our clients that this has been thought through during the architectural process of the site design and not just arisen as a consequence of changing the layout. Thinking through the best way of presenting a site is more important than the practical considerations of swapping content with media queries.


### Compromises are inevitable

In the example above, what if the call to action element was an advert? Will advertisers consider that it’s position at the bottom of the page content be as prominent as it was before? Again, we need to decide in collaboration with the client and demonstrate on the wireframe how everything will appear and agree on the inevitable compromises that must occur. Advertisers will undoubtedly be much happier with this situation:

<img src="/assets/images/3.png" alt="Responsive Wire-frame Tests" width="80%" style="max-width: 100%;" />

### Conclusion

There is no getting away from it, to show a complex website on a narrow screen device such as a mobile, there will have to be compromises. If comprises aren’t made in the content (i.e. we are still giving the whole site without removing content), then compromises will inevitably occur in positioning of the content. On a mobile page there are really only 2 hot areas, the header and the footer, both of which will need to carry important navigation options for our site. Everything in between is fairly equally weighted. Let’s hope no-one ever starts referring to the ‘fold’ when it comes to mobile, or things are going to get very complicated indeed.

Whatever our solutions, we need to quickly wire-frame our intentions to demonstrate both to our clients and to ourselves that we are thinking mobile first, ensuring that width problems are all solvable from the outset and that as we scale our wireframing upwards content can neatly and evenly adapt to fit desktop widths.
