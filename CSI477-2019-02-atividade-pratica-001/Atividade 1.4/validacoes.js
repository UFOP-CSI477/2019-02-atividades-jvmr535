function validacao1(){
    var radio1 = document.getElementById('arroz').checked;
    var radio2 = document.getElementById('batata').checked;
    var radio3 = document.getElementById('feijao').checked;
    var radio4 = document.getElementById('sabonete').checked;

    if(radio4 == true){
        return 1;    
    }
    else{
        return 0;
    }  
}

function validacao2(){
    var radio1 = document.getElementById('algodaoDoce').checked;
    var radio2 = document.getElementById('bicicleta').checked;
    var radio3 = document.getElementById('carro').checked;
    var radio4 = document.getElementById('moto').checked;

    if(radio1 == true){
        return 1;    
    }
    else{
        return 0;
    }  
}

function validacao3(){
    var radio1 = document.getElementById('cadeiraDePraia').checked;
    var radio2 = document.getElementById('maquinaDeLavar').checked;
    var radio3 = document.getElementById('oculos').checked;
    var radio4 = document.getElementById('sombrinha').checked;

    if(radio2 == true){
        return 1;    
    }
    else{
        return 0;
    }  
}

function validacao4(){
    var radio1 = document.getElementById('bola').checked;
    var radio2 = document.getElementById('caveDeFenda').checked;
    var radio3 = document.getElementById('patins').checked;
    var radio4 = document.getElementById('skate').checked;

    if(radio2 == true){
        return 1;    
    }
    else{
        return 0;
    }  
}

function resultado(){
    var resultadosoma = validacao1() + validacao2() + validacao3() + validacao4();
    
    if (resultadosoma == 0){
        alert("Que pena, você não acertou nenhuma, mais atenção na próxima");
    }
    else if (resultadosoma == 1){
        alert("Você acertou uma");
    }
    else if (resultadosoma == 2){
        alert("Você acertou duas");
    }
    else if (resultadosoma == 3){
        alert("Você acertou três");
    } 
    else if (resultadosoma == 4){
        alert("Parabéns, você acertou todas =)");
    }          
}