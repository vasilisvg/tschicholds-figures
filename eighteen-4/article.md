# Two asymmetrical columns

This is clearly an asymmetrical layout. The main column is *three parts* wider than the [common layout for a book](../eighteen-1/). The left top still aligns with a diagonal, as does the left bottom when you scroll all the way down. On the right it touches no significant line at all. It would be interesting to see if blocks that lack touch points look somehow *ugly*. Hard to tell. This column has a `width` of `50%`.

The second column is *three parts* less wide than the common book layout. It touches two diagonal lines: the right top, and the bottom right corners. This column too touches no significant line at all on the left. It has a `width` of `16.66%`, which is one third of the width of the main column.

The margins are the same as in the [classic book layout](../eighteen-1/). A `margin-top` of `11.11vh`, a left and right margin of `11.11%`, and a `margin-bottom` of `22.222vh`. The width is `33.333%`. This corresponds to the layouts described in Tschicholds essays.

The big difference of course is that this is not a book. All Tschicholds ideas are based on the size of the paper, and there is no such thing as a fixed canvas on the web. Especially the height is flexible: pages usually become higher when the browser window gets smaller. In this excercise I used the viewport size as the size of the canvas.

If the content of this article is higher than the viewport, in other words, *if you have to scroll*, you'll see that the left-bottom of the article aligns with a diagonal. So the layout is not always *perfect*, but it is as good as it gets.
