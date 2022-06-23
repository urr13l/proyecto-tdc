
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('#modalRegistro');
  var modalInicio = document.querySelectorAll('#modalInicio');
  var dropdownPerfil = document.querySelectorAll('#tiggerPerfil');
  var sidevarInicio = document.querySelectorAll('.sidenav');
  var select = document.querySelectorAll('select');
  var datePicker = document.querySelectorAll('.datepicker');
  var dropdownPerfil = document.querySelectorAll('#tiggerPerfil');
  var dropdownViajes = document.querySelectorAll('#tiggerViajes');
  var dropdownUrvan = document.querySelectorAll('#tiggerUrvan');
  var dropdownConductor = document.querySelectorAll('#tiggerConductor');
  var dropdownAdministrador = document.querySelectorAll('#tiggerAdministrador');

  var modal2 = document.querySelectorAll('#modal2');
  var instances2 = M.Modal.init(modal2);

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


  var instanciaDropViajes = M.Dropdown.init(dropdownViajes, {
    coverTrigger: false,
    hover: true,
    inDuration: 160,
    outDuration: 500
  });

  var instanciaDropUrvan = M.Dropdown.init(dropdownUrvan, {
    coverTrigger: false,
    hover: true,
    inDuration: 160,
    outDuration: 500
  });

  var instanciaDropConductor = M.Dropdown.init(dropdownAdministrador, {
    coverTrigger: false,
    hover: true,
    inDuration: 160,
    outDuration: 500
  });

  var instanciaDropAdministrador = M.Dropdown.init(dropdownConductor, {
    coverTrigger: false,
    hover: true,
    inDuration: 160,
    outDuration: 500
  });

  var elems3 = document.querySelectorAll('.carousel');
  var instances3 = M.Carousel.init(elems3);

  var elems4 = document.querySelectorAll('#menu-responsive');
  var instances4 = M.Collapsible.init(elems4);

  var elems5 = document.querySelectorAll('.slider');
    var instances5 = M.Slider.init(elems5);

    var combobox = document.querySelectorAll('select');
    var instances6 = M.FormSelect.init(combobox);
    
});
