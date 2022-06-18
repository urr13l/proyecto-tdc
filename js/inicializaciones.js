document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('#modalRegistro');
  var modalInicio = document.querySelectorAll('#modalInicio');
  var dropdownPerfil = document.querySelectorAll('#tiggerPerfil');
  var sidevarInicio = document.querySelectorAll('.sidenav');

  var instances = M.Modal.init(elems);
  var instanciaInicio = M.Modal.init(modalInicio);
  var instanciaDropPerfil = M.Dropdown.init(dropdownPerfil, {
    coverTrigger: false,
    hover: true,
    inDuration: 160,
    outDuration: 500
  });
  var instanciaSideInicio = M.Sidenav.init(sidevarInicio, {
    inDuration: 300, 
    outDuration: 250
  });
});