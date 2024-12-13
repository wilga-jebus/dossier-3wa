// Fonction pour basculer entre mode clair et sombre
function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle('dark-mode');
}

// Ajout d'un écouteur d'événement pour un bouton, par exemple
document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);

console.log("je suis venu, j'ai vu")

// // Si vous souhaitez que le mode sombre soit activé par défaut, vous pouvez ajouter :
// document.addEventListener('DOMContentLoaded', () => {
//     const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
//     if (prefersDarkScheme.matches) {
//         document.body.classList.add('dark-mode');
//     }
// });