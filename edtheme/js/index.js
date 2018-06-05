/* ;

((d, c, $) => {
  c('Hello WordPress with Node')
})(document, console.log, jQuery.noConflict());

;
((d, w, c) => {
  const header = d.querySelector('.Header'),
    customHeader = d.querySelector('.WP-Header'),
    customHeaderHeight = w.getComputedStyle(customHeader).getPropertyValue('height').split('px')[0],
    headerHeight = w.getComputedStyle(header).getPropertyValue('height').split('px')[0]

  let scrollTopLimit = customHeaderHeight - headerHeight,
    sticky = header.offsetTop
  //c(customHeaderHeight, headerHeight, scrollTopLimit)
  //c(sticky)

  function stickyHeader() {
    let scrollTop = w.pageYOffset || d.documentElement.scrollTop

    if (scrollTop >= sticky) {
      header.classList.add('u-sticky')
    } else {
      header.classList.remove('u-sticky')
    }
  }

  w.addEventListener('scroll', stickyHeader)
})(document, window, console.log);
 */
