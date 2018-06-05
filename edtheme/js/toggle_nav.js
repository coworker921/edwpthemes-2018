/* ********** Toggle Navigation ********** */
;

/* ((d, w, c, $) => {
  const menuBtn = d.querySelector('.Menu-btn'),
    menu = d.querySelector('.Menu'),
    mq64 = w.matchMedia('(min-width:64em)')

  function showMenu(mq) {
    if (mq.matches) {
      menu.classList.add('u-block')
      menu.classList.remove('u-none')
    } else {
      menu.classList.remove('u-block')
      menu.classList.add('u-none')
    }
  }

  w.addEventListener('load', showMenu(mq64))
  mq64.addListener(showMenu)

  menuBtn.addEventListener('click', e => {
    menu.classList.toggle('u-block')
    menu.classList.toggle('u-none')
  })
})(document, window, console.log, jQuery.noConflict()); */

;
((d, c) => {
  const panel = d.querySelector('.Panel'),
    panelBtn = d.querySelector('.Panel-btn')

  panelBtn.addEventListener('click', e => {
    e.preventDefault()
    panelBtn.classList.toggle('is-active')
    panel.classList.toggle('is-active')
  })
})(document, console.log);
