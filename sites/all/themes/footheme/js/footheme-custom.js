jQuery(document).ready(function(){
  jQuery("div.view-book-shelf.view-display-id-page div.views-row a.goodreads-book-link").each( function(){
    var bookLink = jQuery(this);
    console.log(bookLink);
    var description = jQuery("div.views-field-nothing",jQuery(bookLink).parent().parent().parent()).clone();
    bookLink.qtip( {
      content: {
        text: description
      },
      position: {
        my: 'top center',
        at: 'bottom center'
      }
    });
  });
  var usedHeadings = new Array();
  jQuery.each(jQuery(" h2, h3, h4", "div.article-content"), function(index, value) {
    var that = jQuery(this);
    var anchorName = that.text();
    if (jQuery.inArray(anchorName, usedHeadings) != -1) {
      anchorName = anchorName + index;
    }
    usedHeadings.push(anchorName);
    jQuery(this).wrapInner('<a name="' + anchorName + '" />').hover(function(){
      jQuery("a.heading-perm-link", this).show();
    },function(){
      jQuery("a.heading-perm-link", this).hide();
    }).append('<a class="heading-perm-link" href="#' + anchorName + '">&#182;</a>');
  });
});
