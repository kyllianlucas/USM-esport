const menuButton = document.getElementById('menu-button');
const menu = document.getElementById('menu');

    menuButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        if (!menu.classList.contains('hidden')) {
            menu.classList.add('flex', 'flex-col', 'items-center');
        } else {
            menu.classList.remove('flex', 'flex-col', 'items-center');
        }
    });
