$(document).ready(function () {$("#ImovelEstado").bind("change", function (event) {$.ajax({async:true, complete:function (XMLHttpRequest, textStatus) { $('#ImovelCidade').html('');}, data:"{\"estado_id\":\"$(this).value()\"}", url:"http:\/\/localhost\/imobiliariaverissimo\/cidades.json"});
return false;});});