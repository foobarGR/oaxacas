$(document).ready(main);

var contador = 1;

function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}


function eliminar(table, id){

    if(confirm("¿Estas seguro de eliminar el registro?")){
               var xmlhttp = new XMLHttpRequest();
        var url="../delete.php?table="+table+"&id="+id;
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var array= JSON.parse(xmlhttp.responseText);
                document.getElementById(id).style.display="none";
                alert("Registro eliminado exitosamente");
            }else{
            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
       }

}

function agregarU(table){
    
    var user=document.getElementById('user').value;
    var pass= document.getElementById('pass').value;
    var band=true;
    if(user.length<1){
        band=false;
        document.getElementById('user').style.borderColor="#FF0000";
       }else{
          document.getElementById('user').style.borderColor="#00FF00";
         
       }
    
    if(pass.length<1){
       band=false;
        document.getElementById('pass').style.borderColor="#FF0000";
       }else{
          document.getElementById('user').style.borderColor="#00FF00";           
       }
    
    if(band){
        var xmlhttp = new XMLHttpRequest();
        var url="../insert.php?table=users&user="+document.getElementById('user').value+"&pass="+document.getElementById('pass').value;
    
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('user').value="";
                document.getElementById('pass').value="";
                alert("Usuario agregado exitosamente");
            }else{

            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
       }else{
           alert("Campos vacios");
       }
}
function modificarU(id,name,pass){
    name =document.getElementById('user').value;
    pass=document.getElementById('pass').value;
    var band=true;
     if(name.length<1){
        band=false;
        document.getElementById('user').style.borderColor="#ffe42a";
       }else{
          document.getElementById('user').style.borderColor="#00FF00";
         
       }
       if(pass.length<1){

        band=false;
        document.getElementById('pass').style.borderColor="#ffe42a";
       }else{
          document.getElementById('pass').style.borderColor="#00FF00";
         
       }

       if(band){
        var xmlhttp = new XMLHttpRequest();
        var url="../update.php?table=users&user="+name+"&id="+id+"&pass="+pass;
    
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                alert("Usuario modificado exitosamente");
                location.href ="../users/modificar.php";

            }else{

            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
       }else{
        alert("Campos vacio");
       }
        
}


function agregar(){
    var pl=document.getElementById('nplan').value;
    var band=true;
    if(pl.length<1){
         band=false;
        document.getElementById('nplan').style.borderColor="#ffe42a";
       }else{
          document.getElementById('nplan').style.borderColor="#00FF00";
         
       }

       if(band){
        var xmlhttp = new XMLHttpRequest();
        var url="../insert.php?table=t_plan_estudios&nplan="+document.getElementById('nplan').value;
    
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('nplan').value="";
                alert("Plan agregado exitosamente");
            }else{

            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
    }else{
        alert("Campos vacios");
    }

        
        
    
}
function modificarPl(id,name){
        name =document.getElementById('nplan').value;
        var band=true;
    if(name.length<1){
         band=false;
        document.getElementById('nplan').style.borderColor="#ffe42a";
       }else{
          document.getElementById('nplan').style.borderColor="#00FF00";
         
       }

       if(band){
        var xmlhttp = new XMLHttpRequest();
        var url="../update.php?table=t_plan_estudios&nplan="+name+"&id="+id;
    
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Plan modificado exitosamente");
                location.href ="../plan/modificar.php";

            }else{

            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
       }else{
        alert("Campos vacios");
       }

        
}

function agregarPeriodo(){
    var plan=document.getElementById('plan').value;
    var inicio=document.getElementById('finicio').value;
    var fin=document.getElementById('ffin').value;

     var band=true;
    if(plan.length<1){
         band=false;
        document.getElementById('plan').style.borderColor="#ffe42a";
       }else{
          document.getElementById('plan').style.borderColor="#00FF00";
         
       }

    if(inicio.length<1){
         band=false;
        document.getElementById('finicio').style.borderColor="#ffe42a";
       }else{
          document.getElementById('finicio').style.borderColor="#00FF00";
         
       }

    if(fin.length<1){
         band=false;
        document.getElementById('ffin').style.borderColor="#ffe42a";
       }else{
          document.getElementById('ffin').style.borderColor="#00FF00";
         
       }

       if(band){
        var xmlhttp = new XMLHttpRequest();
        var url="../insert.php?table=t_periodos&plan="+document.getElementById('plan').value+"&finicio="+document.getElementById('finicio').value+"&ffin="+document.getElementById('ffin').value;
    
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Periodo agregado exitosamente");
            }else{

            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
    }else{
        alert("Campos vacios");
    }
    
        
    
}




function modificarPe(id,inicio,fin,idPl){
        inicio =document.getElementById('finicio').value;
        fin =document.getElementById('ffin').value;
        idPl=document.getElementById('plan').value;
        id =parseInt(id);
        idPl=parseInt(idPl);

        var band=true;
        if(inicio.length<1){
         band=false;
         document.getElementById('finicio').style.borderColor="#ffe42a";
        }else{
          document.getElementById('finicio').style.borderColor="#00FF00";
         
       }
       if(fin.length<1){
         band=false;
         document.getElementById('ffin').style.borderColor="#ffe42a";
        }else{
          document.getElementById('ffin').style.borderColor="#00FF00";
         
       }

       if(band){
        var xmlhttp = new XMLHttpRequest();
        var url="../update.php?table=t_periodos&inicio="+inicio+"&fin="+fin+"&id="+id+"&idPl="+idPl;
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Periodo modificado exitosamente");
                location.href ="../periodos/modificar.php";

            }else{

            }
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
    }else{

        alert("Campos vacios");
    }
        
}



function modificarIns(id){
        var alumno=document.getElementById('alumno').value;
        var grupo=document.getElementById('grupo').value;
        var plan=document.getElementById('plan2').value;
        var docente=document.getElementById('docente').value;
        var periodo=document.getElementById('periodo').value;
        var pago=parseInt(document.getElementById('pagoA').value);
    
        var xmlhttp = new XMLHttpRequest();
        var url="../update.php?table=t_inscripciones&alumno="+alumno+"&grupo="+grupo+"&plan="+plan+"&docente="+docente+"&periodo="+periodo+"&pago="+pago+"&id="+id;
        
        xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert("Inscripcion modificada exitosamente");
                    location.href ="../inscripciones/modificar.php";

                }else{

                }
            }
            xmlhttp.open("GET",url,true);
            xmlhttp.send();

}

