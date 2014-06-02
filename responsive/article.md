# The proportions of the web

In one of his essays <b>Jan Tschichold</b> mentions a way to construct a page layout with a schema created by <b>Joh. A van de Graaf</b>. This page construct is usable for pages of any ratio. This means that it's perfectly usable for the web, which, as we all know, has an unlimited amount of canvas sizes and ratios.

In this example I use three different layouts. If the viewport width is wider than the height this text is shown in two columns and the layout follows the figure as if it was laid out over two pages in a book. If the viewport width is smaller than the height the text is displayed over one column and the page is laid out as if it was printed on the right page of a book. And finally, if this viewport is less than `30em` wide it's displayed as if it was printed on the left page in a book.

As we all know, using multicolumn layout on te web can be tricky. It's used here as an example for layout, not necessarily as a best practice. Also note that the exact paddings around the content can be altered to your taste. Tschichold was rather strict in his ideas about page layout — even though he became milder with the years — but there's no such thing as strictness on the weird, weird, chaotic web.

*(This page doesn't work on all current versions of Safari (on June 2nd, 2014). It doesn't support multi-column layout well enough, and its implementation of the `vh` unit is buggy. It definitely works in the latest Firefox and Chrome, and I haven't tested it in other browsers)*
