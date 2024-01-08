document.getElementById('signup-btn').addEventListener('click', function() {
    document.getElementById('signup-modal').style.display = 'block';
});

document.getElementsByClassName('close')[0].addEventListener('click', function() {
    document.getElementById('signup-modal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('signup-modal')) {
        document.getElementById('signup-modal').style.display = 'none';
    }
});

document.getElementById('signup-btn-aluno').addEventListener('click', function() {
    document.getElementById('signup-modal-aluno').style.display = 'block';
});

document.getElementsByClassName('close')[0].addEventListener('click', function() {
    document.getElementById('signup-modal-aluno').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('signup-modal-aluno')) {
        document.getElementById('signup-modal-aluno').style.display = 'none';
    }
});