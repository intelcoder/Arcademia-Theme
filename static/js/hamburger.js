(function() {
  // your page initialization code here
  // the DOM will be available here
  document.addEventListener("DOMContentLoaded", function() {
    // Handler when the DOM is fully loaded
    const hamburger = document.querySelector('#hamburger')
    const mobileMenuContainer = document.querySelector('#mobile-menu-container')
    const body = document.querySelector('body')
    // minus header
    // mobileMenuContainer.style.height = window.innerHeight - 124 + 'px'
    hamburger.addEventListener('click', function() {
      // ie 9 does not support this
      const isActive = hamburger.classList.contains('is-active')
      if(isActive) {
        hamburger.classList.remove('is-active')
        mobileMenuContainer.classList.remove('is-active')
        body.style.maxHeight = 'auto'
        body.style.overflowY = 'initial'
      } else {
        // mobileMenuContainer.style.height = window.innerHeight
        hamburger.classList.add('is-active')
        mobileMenuContainer.classList.add('is-active')
        body.style.maxHeight = '100vh'
        body.style.overflowY = 'hidden'
      }
    })
    window.addEventListener('resize', function() {
      // mobileMenuContainer.style.height = window.innerHeight - 124 + 'px'
    })
  });
})();