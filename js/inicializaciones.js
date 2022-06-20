document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('#modalRegistro');
  var modalInicio = document.querySelectorAll('#modalInicio');
  var dropdownPerfil = document.querySelectorAll('#tiggerPerfil');
  var sidevarInicio = document.querySelectorAll('.sidenav');
  var select = document.querySelectorAll('select');
  var datePicker = document.querySelectorAll('.datepicker');


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

  var instanciaSelect = M.FormSelect.init(select);
  
  var instanciaDate = M.Datepicker.init(datePicker, {
    autoClose: true,
    format: 'dd mmmm yyyy',
    i18n: {
      months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
      weekdays: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
      weekdaysShort: ['Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa', 'Do'],
      weekdaysAbbrev: ['L', 'M', 'MM', 'J', 'V', 'S', 'D']
    }
  });
    
});

