// JavaScript Document

var puntos = ":"
function hora(){
	var fecha = new Date()
	var hora = fecha.getHours()
	var minuto = fecha.getMinutes()
	var meridiano = " am"
	if(hora > 12){hora -= 12; meridiano = " pm"}
	if (hora < 10) {hora = "0" + hora}
	if (minuto < 10) {minuto = "0" + minuto}
	puntos == ":" ? puntos = " " : puntos = ":"
	var horita = hora + puntos + minuto + meridiano
	document.getElementById('hora').firstChild.nodeValue = horita
	tiempo = setTimeout('hora()',1000)
}
function inicio(){
	document.write('<span id="hora">')
	document.write ('000000</span>')
	hora()
}