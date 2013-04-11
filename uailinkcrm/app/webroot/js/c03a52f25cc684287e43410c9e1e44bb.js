$(document).ready(function () {$("#ImovelEstado").bind("change", function (event) {   var id = this.value;
            $.getJSON('http://localhost/imobiliariaverissimo/cidades.json?estado_id='+id, function(data){
                     $('#ImovelCidade').html('');         
                     $.each(data, function(key, val) {
                         $('#ImovelCidade').append('<option value='+val.Cidade.id+'>'+val.Cidade.nome_cidade+'</option>');
                     });    
                }            
            );            
        
return false;});
$("#ImovelBairro").bind("change", function (event) {   var id = this.value;
            $.getJSON('?cidade_id='+id, function(data){
                     $('#ImovelBairro').html('');         
                     $.each(data, function(key, val) {
                         $('#ImovelBairro').append('<option value='+val.Bairro.id+'>'+val.Bairro.nome_cidade+'</option>');
                     });    
                }            
            );            
        
return false;});});