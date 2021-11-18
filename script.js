// nav animation
const nav = document.querySelector('nav')
const navHide = document.querySelector('.hide-nav')
const navTransparent = document.querySelector('.nav-transparent')
const width = document.documentElement.clientWidth
const chart = document.querySelector('.piechart')
window.addEventListener('scroll', () => {
    const scrolled = window.scrollY
    if (scrolled >= 20 ) {
        navHide.classList.add('position-fixed')
        navHide.style.top = '0';
        navHide.style.transition = '.5s';
        navTransparent.style.transition = '.5s';
    } else {
        navHide.style.top = '-75px';
        navTransparent.style.display = 'block';
        navHide.style.transition = '.5s';
        navTransparent.style.transition = '.5s';
        navHide.classList.remove('fixed-top')
        navTransparent.classList.add('fixed-top')
    }
});

// width.addEventListener('resize', () => {
    //  else if (width >= 384 && width < 666) {
//         chart.toggleAttribute("style", "width: 450px; padding: 0px; margin: 40px auto;")
//     } else if (width >= 667 && width < 990) {
//         chart.toggleAttribute("style", "width: 100%; padding: 0px; margin: 40px auto;")
//     } else if (width >= 991 && width < 9999) {
//         chart.toggleAttribute("style", "width: 1000px; height: 500px; padding: 0px; margin: 40px auto;")
//     } 
// })
