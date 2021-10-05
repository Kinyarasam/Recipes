require('./bootstrap');

const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener( 'click', () => {
    if ( menu.classList.contains( 'hidden' )) {
        menu.classlist.remove( 'hidden' );
    } else {
        menu.classlist.add( 'hidden' );
    }
})