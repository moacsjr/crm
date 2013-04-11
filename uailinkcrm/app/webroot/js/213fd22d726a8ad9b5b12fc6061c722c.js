$(document).ready(function () {$("#ImovelEstado").bind("change", function (event) {   var id = this.value;
            $.getJSON(
                'http://localhost/imobiliariaverissimo/cidades.json?estado_id='+id, function(data){
                     $('#ImovelCidade').html('');         
                     $.each(data, function(key, val) {

                     });    
                }            
            );            
        
return false;});});