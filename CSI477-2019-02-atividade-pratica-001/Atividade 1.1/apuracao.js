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
        if(!isNaN(parseFloat(largada)) && isNaN(parseFloat(competidor)) && !isNaN(parseFloat(tempo))){ 
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

function apurar() {
    var rows, switching, i, x, y, shouldSwitch;
    
    loop = true;
    
    while (loop) {
        loop = false;
        rows = table.rows;
        
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            
            x = table.rows[i].cells[3];
            y = table.rows[i + 1].cells[3];
            
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
        
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            loop = true;
        }
    }

    table.rows[contador].cells[4].innerHTML = "Vencedor(a)!";
}
