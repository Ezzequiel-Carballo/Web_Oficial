var typed = new Typed(".multiple-text",{
    strings: ["Developer", "Frontend", "Backend"],
    typeSpeed:100,
    backSpeed:100,
    backDelay:1000,
    loop:true
})

// Seleccionar todos los enlaces de apertura de modal
var openModalLinks = document.querySelectorAll('.open-modal');

// Función para abrir el modal específico según el ID
function openModal(modalId) {
    var overlay = document.getElementById('overlay' + modalId);
    overlay.style.visibility = 'visible';
    var modal = document.getElementById('modal' + modalId);
    modal.classList.add('active');
}

// Función para cerrar todos los modales
function closeModal() {
    var overlays = document.querySelectorAll('.overlay');
    overlays.forEach(function(overlay) {
        overlay.style.visibility = 'hidden';
    });
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        modal.classList.remove('active');
    });
}

// Asignar evento de clic a cada enlace de apertura de modal
openModalLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Evitar que el enlace cambie la URL
        
        var modalId = this.getAttribute('data-modal-id').replace('modal', '');
        openModal(modalId);
    });
});

// Asignar evento de clic al botón de cerrar de cada modal
var closeButtons = document.querySelectorAll('.modal .modal_off');
closeButtons.forEach(function(closeBtn) {
    closeBtn.addEventListener('click', function() {
        closeModal();
    });
});


function gmail(){
    var respuesta = alert("Gmail: ezequielcarballo018@gmail");
}

function message(){
    var respuesta = alert("Gracias por el mensaje, me estare comunicando a la brevedad.");
}