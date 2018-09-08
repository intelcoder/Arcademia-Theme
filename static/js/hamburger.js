(function() {
  // your page initialization code here
  // the DOM will be available here
  document.addEventListener("DOMContentLoaded", function() {
    // Handler when the DOM is fully loaded
    let hamburger = document.querySelector('#hamburger')
    let mobileMenuContainer = document.querySelector('#mobile-menu-container')
    // minus header
    mobileMenuContainer.style.height = window.innerHeight - 124 + 'px'
    hamburger.addEventListener('click', function() {
      // ie 9 does not support this
      const isActive = hamburger.classList.contains('is-active')
      if(isActive) {
        hamburger.classList.remove('is-active')
        mobileMenuContainer.classList.remove('is-active')
      } else {
        mobileMenuContainer.style.height = window.innerHeight
        hamburger.classList.add('is-active')
        mobileMenuContainer.classList.add('is-active')
      }
    })
    window.addEventListener('resize', function() {
      mobileMenuContainer.style.height = window.innerHeight - 124 + 'px'
    })
  });
})();