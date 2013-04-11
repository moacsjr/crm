$(document).ready(function () {$("#Estado").bind("change", function (event) {   var id = this.value;
            $.getJSON('http://localhost/imobiliariaverissimo/cidades.json?estado_id='+id, function(data){
                     $('#Cidade').html('');         
                     $.each(data, function(key, val) {
                         $('#Cidade').append('<option value='+val.Cidade.id+'>'+val.Cidade.nome_cidade+'</option>');
                     });    
                }            
            );            
        
return false;});
$("#Cidade").bind("change", function (event) {   var id = this.value;
            $.getJSON('http://localhost/imobiliariaverissimo/bairros.json?cidade_id='+id, function(data){
                     $('#Bairro').html('');         
                     $.each(data, function(key, val) {
                         $('#Bairro').append('<option value='+val.Bairro.id+'>'+val.Bairro.nome_bairro+'</option>');
                     });    
                }            
            );            
        
return false;});});