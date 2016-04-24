
        function calcula(operacion){  //para crear un mpetodo se usa function nombre (parametro){}

        //los valores se optienen a travez del atributo name
        var operador1 = document.calc.pagoxhora.value; //no es necesario decir de que tipo es la variable, a menos de que sea un arreglo
        var operador2 = document.calc.horasxdia.value; //se usa para buscar un valor en la pagina y asignarlo a una variable
        var operador3 = document.calc.duracionproyec.value;


        //los valores se optienen a travez del id
        var operador1 = document.getElementById('pagoxhora').value;
        var operador2 = document.getElementById('horasxdia').value;
        var operador3 = document.getElementById('duracionproyec').value;

        var result = eval(operador1 + operacion + operador2 + operacion + operador3 + operacion + 1.2); //crea la variable resultado, se usa la instruccion eval para una operación
                                                            // los signos de "+" son solamente concatenadores, no operadores

        document.calc.resultado.value=result;

        }
