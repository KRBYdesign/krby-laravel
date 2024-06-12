// Menu
const menuIcon = document.getElementById('menu-icon');
const menuItems = document.querySelectorAll('.menu-item');

menuIcon.addEventListener('click', () => {
    const status = menuIcon.dataset.active;

    if (status === "false") {
        menuIcon.dataset.active = "true";
        showMenuItems();
    } else {
        menuIcon.dataset.active = "false";
        hideMenuItems();
    }
});

function showMenuItems() {
    menuItems.forEach((i) => {
        i.dataset.visible = "true";
    })
}

function hideMenuItems() {
    menuItems.forEach((i) => {
        i.dataset.visible = "false";
    })
}
