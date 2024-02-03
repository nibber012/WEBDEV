document.addEventListener("DOMContentLoaded", function () {
    var loginInterface = document.querySelector('.login-interface');
    var registerInterface = document.querySelector('.register-interface');
    var showRegisterLink = document.getElementById('show-register');
    var showLoginLink = document.getElementById('show-login');

    showRegisterLink.addEventListener('click', function () {
        loginInterface.classList.add('hidden');
        registerInterface.classList.remove('hidden');
        setTimeout(function () {
            loginInterface.style.display = 'none';
            registerInterface.style.display = 'block';
        }, 300); // Adjust the timeout to match the transition duration
    });

    showLoginLink.addEventListener('click', function () {
        loginInterface.classList.remove('hidden');
        registerInterface.classList.add('hidden');
        setTimeout(function () {
            loginInterface.style.display = 'block';
            registerInterface.style.display = 'none';
        }, 300); // Adjust the timeout to match the transition duration
    });
});
