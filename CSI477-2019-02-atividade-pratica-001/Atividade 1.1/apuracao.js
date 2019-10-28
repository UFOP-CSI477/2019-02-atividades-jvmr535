table = document.getElementById("tb1");
        
var i = 1;

var contador = 1;

var largada;
var competidor;
var tempo;

function addNaTabela(){

    largada = document.getElementsByName("largada");
    largada = largada[0].value;
    
    competidor = document.getElementsByName("competidor");
    competidor = competidor[0].value;
    
    tempo = document.getElementsByName("tempo");
    tempo = tempo[0].value;

    if(i < 7){
        if(!isNaN(parseFloat(largada)) && isNaN(parseFloat(competidor)) && !isNaN(parseFloat(tempo)) && largada.length != 0 && competidor.length != 0 && tempo.length != 0){ 
            table.rows[i].cells[1].innerHTML = largada;
            table.rows[i].cells[2].innerHTML = competidor;
            table.rows[i].cells[3].innerHTML = tempo;
    
            i++;
        }
        else{
            window.alert("Entrada de dados inválidos")
        }          
    }
    else{
        window.alert("Tabela Cheia")
    }
} 

function apurar(){
    //table = document.getElementById("tb1");
    var rows, switching, i, x, y, shouldSwitch;
    
    loop = true;
    
    let posicao = 1;

    rows = table.rows;

    while (loop) {
        loop = false;
        
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            
            x = table.rows[i].cells[3];
            y = table.rows[i + 1].cells[3];
            
            if (Number(x.innerHTML) > Number(y.innerHTML)) {
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
        
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            loop = true;
            
        }
    }
    table.rows[1].cells[4].innerHTML = "Vencedor(a)!";
    for(let contador2 = 1; contador2 <= 7; contador2++){
        table.rows[contador2].cells[0].innerHTML = contador2+"º";
    }

        
}