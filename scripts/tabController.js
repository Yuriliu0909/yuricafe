const homeTabBtn = document.getElementById('home-tab');
const menuTabBtn = document.getElementById('menu-tab');
const locationTabBtn = document.getElementById('location-tab');
const cartTabBtn = document.getElementById('cart-tab');
const coffeeTabBtn = document.getElementById('coffee-tab');
const pastryTabBtn = document.getElementById('pastry-tab');

document.addEventListener('DOMContentLoaded', ()=>{
    switchTabs('home-content');
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
coffeeTabBtn.addEventListener('click', () => {
    window.location.hash = '#coffee-content';
});
pastryTabBtn.addEventListener('click', () => {
    window.location.hash = '#pastry-content';
});

window.onhashchange = function() {
    switch(window.location.hash) {
        case '#home-content':
            switchTabs('home-content' );
            break;
        case '#menu-content':
            switchTabs('menu-content');
            break;
        case '#location-content':
            switchTabs('location-content');
            break;
        case '#cart-content':
            switchTabs('cart-content');
            break;
        case '#coffee-content':
            switchTabs('coffee-content');
            break;
        case '#pastry-content':
            switchTabs('pastry-content');
            break;
    }
};

function switchTabs(tabID) {
    let tabContainers = document.getElementsByClassName('tab-content');
    for(let i = 0; i < tabContainers.length; i++) {
        if(tabID !== tabContainers[i].id) {
            tabContainers[i].style.display = 'none';
        } else {
            tabContainers[i].style.display = 'block';
        }
    }
}