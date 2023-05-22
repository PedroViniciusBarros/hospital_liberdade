$(document).ready(function() {
  // Configura o datepicker para usar o formato dd/mm/yyyy e o idioma português do Brasil
  $('#data').datepicker({
    format: 'dd/mm/yyyy',
    language: 'pt-br',
    todayHighlight: true,
    autoclose: true,
    zIndexOffset: 100000 // para evitar problemas de sobreposição com o Bootstrap
  });
});
