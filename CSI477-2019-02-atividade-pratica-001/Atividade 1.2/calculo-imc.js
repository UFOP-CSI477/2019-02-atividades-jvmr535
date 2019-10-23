function calcularIMC(){
    let peso = document.getElementsByName("peso");
    peso = peso[0].value
    let altura = document.getElementsByName("altura");
    altura = altura[0].value
    
    let calculo = peso / Math.pow(altura, 2);

    if(calculo < 18.5){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo+" - Classificação: Subnutrição";
    }
    else if(calculo >= 18.5 && calculo <= 24.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo+" - Classificação: Peso Ideal";
    }
    else if(calculo >= 25 && calculo <= 29.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo+" - Classificação: Sobrepeso";
    }
    else if(calculo >= 30 && calculo <= 34.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo+" - Classificação: Obesidade Grau 1";
    }
    else if(calculo >= 35 && calculo <= 39.9){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo+" - Classificação: Obesidade Grau 2";
    }
    else if(calculo >= 40){
        let resaux = document.getElementsByName("resultado");
        resaux[0].value = "IMC: "+calculo+" - Classificação: Obesidade Grau 3";
    }
}