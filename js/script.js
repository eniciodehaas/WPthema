// script submenu

const heeftSubmenu = document.querySelectorAll('.menu-item-has-children');

for (let i = 0; i < heeftSubmenu.length; i++) {
  const submenu     = heeftSubmenu[i].querySelector('.sub-menu');
  const linkSubmenu = heeftSubmenu[i].querySelector('a');
  // submenu verbergen
  submenu.classList.toggle('menu-verbergen');

  // submenu verschijnen
  linkSubmenu.addEventListener('click', (e) => {
    e.preventDefault();
    submenu.classList.toggle('menu-verbergen');
    linkSubmenu.classList.toggle('menu-open');
  })
}

// placeholder tekst en type zoekvenster
// stop de input search in een variabele
let zoekVenster = document.getElementById('s');
zoekVenster.setAttribute('placeholder', 'Zoeken...');
zoekVenster.setAttribute('type', 'search');
