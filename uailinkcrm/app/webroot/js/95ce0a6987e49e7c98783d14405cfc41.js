$(document).ready(function () {$("#ImovelEstado").bind("change", function (event) {   var id = this.value;
            $.getJSON('http://localhost/imobiliariaverissimo/cidades.json?estado_id='+id, function(data){
                     $('#ImovelCidade').html('');         
                     $.each(data, function(key, val) {
                         $('#ImovelCidade').append('<option value='1'>Opcao1</option>');
                     });    
                }            
            );            
        
return false;});});