  var dialog = document.querySelectorAll('#favDialog');
  var botonAbrir = document.getElementById('editar');
  var botonCerrar = document.getElementById('cerrar');

  dialog.forEach(dialog => {
    botonAbrir.addEventListener('click', function() {
      dialog.showModal();
    });
    
    botonCerrar.addEventListener('click', function() {
      dialog.close();
    });
    
  });
  

 
