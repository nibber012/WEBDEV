function toggleSidebar(sidebarId) {
    var sidebar = document.getElementById(sidebarId);
    var overlay = document.getElementById('overlay');
    sidebar.style[sidebarId === 'menu-sidebar' ? 'left' : 'right'] = sidebar.style[sidebarId === 'menu-sidebar' ? 'left' : 'right'] === '0px' ? `-${sidebar.offsetWidth}px` : '0px';
    overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
}

function closeSidebar(sidebarId) {
    var sidebar = document.getElementById(sidebarId);
    var overlay = document.getElementById('overlay');
    sidebar.style[sidebarId === 'menu-sidebar' ? 'left' : 'right'] = `-${sidebar.offsetWidth}px`;
    overlay.style.display = 'none';
}

function closeAllSidebars() {
    closeSidebar('menu-sidebar');
    closeSidebar('search-sidebar');
    closeSidebar('cart-sidebar');
}
