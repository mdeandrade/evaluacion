<input type="number" name="pesoxRango0" value="">
<input type="number" name="pesoxRango1" value="">
<input type="number" name="pesoxRango2" value="">


/// js

// declarar array..
var datos = [];

// declarar incremento..
var i = 0;

// mientras pesoxRango0 sea diferente a nulo, hacer....
// mientras pesoxRango1 sea diferente a nulo, hacer....
// mientras pesoxRango3 sea diferente a nulo, hacer....
while( $("[name='pesoxRango"+i+"']").val() != null ){

  // obtener el value del elemento...
  var a = $("[name='pesoxRango"+i+"']").val();
  
  // subir el value del pesoxRango al array...
  datos.push(a);
}

// sumar array....
sum = datos.reduce(function(a, b) { return a + b; }, 0);


// poner la suma total en el input total
$("[name='pesoxRangoTotal']").val(sum);

