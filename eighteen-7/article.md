# Two asymmetrical columns

This is an asymmetrical layout. The width of the two columns is as wide as the [classic book layout](../eighteen-1/), but in this case both columns have a different size.

The main column is *one part* wider and extends to the exact middle of the page, which seems like a natural place to align things with. The left top still aligns with a diagonal, as does the left bottom when you scroll all the way down. The `width` is `38.88%`.

The second column is as wide as the original column. It touches the three original diagonal lines at the right top, and the two bottom corners. It has a `width` of `33.33%`.

The margins on the whole page are the same as in the [classic book layout](../eighteen-1/). The difference is the margin between the wto columns. In all previous layouts it consisted of *two parts* (or 11.11% of the viewport width), in this case it's just *one part* (or 5.55% of the viewport width).

The big difference of course is that this is not a book. All Tschicholds ideas are based on the size of the paper, and there is no such thing as a fixed canvas on the web. Especially the height is flexible: pages usually become higher when the browser window gets smaller. In this excercise I used the viewport size as the size of the canvas.

If the content of this article is higher than the viewport, in other words, *if you have to scroll*, you'll see that the left-bottom of the article aligns with a diagonal. So the layout is not always *perfect*, but it is as good as it gets.
