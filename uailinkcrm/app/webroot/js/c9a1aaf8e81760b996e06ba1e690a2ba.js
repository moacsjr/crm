$(document).ready(function () {$("#ImovelEstado").bind("change", function (event) {
            var id = this.value;
            $.getJSON(
                'http://localhost/imobiliariaverissimo/cidades.json?estado_id=+id'            
            );   
        
        
        
        
return false;});});