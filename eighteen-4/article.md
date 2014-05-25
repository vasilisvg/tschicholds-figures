# Two asymmetrical columns

The [classic idea of a two page layout in a book](../eighteen-3/) is not common on the web. We also don't have the restriction of a fold in the middle of the two pages. We can use the whole width to lay our column out.

This is an asymmetrical layout. The main column is `5.55%` wider and extends to the exact middle of the page, which seems like a natural place to align things with. The left top still aligns with a diagonal, as does the left bottom when you scroll all the way down.

The second column is `5.55%` less wide. It touches three diagonal lines: the right top, and the two bottom corners.

The margins are the same as in the [classic book layout](../eighteen-3/). A `margin-top` of `11.11vh`, a left and right margin of `11.11%`, and a `margin-bottom` of `22.222vh`. The width is `33.333%`. This corresponds to the layouts described in Tschicholds essays.

The big difference of course is that this is not a book. All Tschicholds ideas are based on the size of the paper, and there is no such thing as a fixed canvas on the web. Especially the height is flexible: pages usually become higher when the browser window gets smaller. In this excercise I used the viewport size as the size of the canvas.

If the content of this article is higher than the viewport, in other words, *if you have to scroll*, you'll see that the left-bottom of the article aligns with a diagonal. So the layout is not always *perfect*, but it is as good as it gets.
