$(document).ready(function () {$("#ImovelEstado").bind("change", function (event) {console.debug($(this)[0].value()); var id = $(this).value();$.ajax({async:true, complete:function (XMLHttpRequest, textStatus) { $('#ImovelCidade').html('');}, url:"http:\/\/localhost\/imobiliariaverissimo\/cidades.json&#039;?estado_id=&#039;+id"});
return false;});});