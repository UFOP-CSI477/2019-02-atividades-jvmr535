function calcularIMC(){
    let peso = document.getElementsByName("peso");
    peso = peso[0].value;
    let altura = document.getElementsByName("altura");
    altura = altura[0].value;

    let calculo;

    if(isNaN(parseFloat(peso)) == false || isNaN(parseFloat(altura)) == false){
        calculo = peso / Math.pow(altura, 2);  
    }
    else{
        alert("Entrada de Dados Inválida");       
    }

    if(calculo < 18.5){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo.toFixed(2)+" - Classificação: Subnutrição";
    }
    else if(calculo >= 18.5 && calculo <= 24.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo.toFixed(2)+" - Classificação: Peso Ideal";
    }
    else if(calculo >= 25 && calculo <= 29.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo.toFixed(2)+" - Classificação: Sobrepeso";
    }
    else if(calculo >= 30 && calculo <= 34.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo.toFixed(2)+" - Classificação: Obesidade Grau 1";
    }
    else if(calculo >= 35 && calculo <= 39.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo.toFixed(2)+" - Classificação: Obesidade Grau 2";
    }
    else if(calculo >= 40){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo.toFixed(2)+" - Classificação: Obesidade Grau 3";
    }
}