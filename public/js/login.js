const form = document.querySelector('button');
const email = document.querySelector('#email');


form.addEventListener('click', () => {
    if (email.value === 'admin@admin') {
        console.log('khaa');
        window.location.replace('/adminPrincipal.html');
    } else {
        window.location.replace('/usuarioLogueado.html');
    }
});