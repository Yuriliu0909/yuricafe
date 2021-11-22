const homeTabBtn = document.getElementById('home-tab');
const menuTabBtn = document.getElementById('menu-tab');
const locationTabBtn = document.getElementById('location-tab');
const cartTabBtn = document.getElementById('cart-tab');

document.addEventListener('DOMContentLoaded', ()=>{
    switchTabs('home-content', 'home-tab');
});

homeTabBtn.addEventListener('click', () => {
    window.location.hash = '#home-content';
});
menuTabBtn.addEventListener('click', () => {
    window.location.hash = '#menu-content';
});
locationTabBtn.addEventListener('click', () => {
    window.location.hash = '#location-content';
});
cartTabBtn.addEventListener('click', () => {
    window.location.hash = '#cart-content';
});

window.onhashchange = function() {
    switch(window.location.hash) {
        case '#home-content':
            switchTabs('home-content' , 'home-tab');
            break;
        case '#menu-content':
            switchTabs('menu-content', 'menu-tab');
            break;
        case '#location-content':
            switchTabs('location-content', 'location-tab');
            break;
        case '#cart-content':
            switchTabs('cart-content', 'cart-tab');
            break;
    }
};

function switchTabs(tabID, headerID) {
    let tabContainers = document.getElementsByClassName('tab-content');
    let headerButtons = document.getElementsByClassName('nav-item');
    for(let i = 0; i < tabContainers.length; i++) {
        if(tabID !== tabContainers[i].id) {
            tabContainers[i].style.display = 'none';
        } else {
            tabContainers[i].style.display = 'block';
        }
    }
    //
    // for(let i = 0; i < headerButtons.length; i++) {
    //     if(headerID === headerButtons[i].id) {
    //         headerButtons[i].style.backgroundColor = 'none';
    //     } else {
    //         headerButtons[i].style.backgroundColor = '#555';
    //     }
    // }
}