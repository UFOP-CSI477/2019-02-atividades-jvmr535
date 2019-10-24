function calcular_magnitude(){
    let amplitude = document.getElementsByName("amplitude");
    amplitude = amplitude[0].value;

    let intervaloTempo = document.getElementsByName("intervaloTempo");
    intervaloTempo = intervaloTempo[0].value;

    let aux = 8 * intervaloTempo;

    let magnitude = Math.log10(amplitude) + (3 * Math.log10(aux)) - 2.92;

    if(magnitude < 3.5){
        let resultado = document.getElementsByName("magnitude");
        resultado[0].value = "Magnitude: "+magnitude.toFixed(2)+" - Geralmente não sentido, mas gravado";
    }
    else if(magnitude >= 3.5 && magnitude <= 5.4){
        let resultado = document.getElementsByName("magnitude");
        resultado[0].value = "Magnitude: "+magnitude.toFixed(2)+" - Às vezes sentido, mas raramente causa danos";
    }
    else if(magnitude >= 5.5 && magnitude <= 6){
        let resultado = document.getElementsByName("magnitude");
        resultado[0].value = "Magnitude: "+magnitude.toFixed(2)+" - No máximo causa pequenos danos a prédios bem"+ 
                    " construidos, mas pode danificar seriamente casas mal contruidas em regiões próximo";
    }
    else if(magnitude >= 6.1 && magnitude <= 6.9){
        let resultado = document.getElementsByName("magnitude");
        resultado[0].value = "Magnitude: "+magnitude.toFixed(2)+" - Pode ser destrutivo em áreas em torno de até "
        +"100km do epicentro";
    }
    else if(magnitude >= 7 && magnitude <= 7.9){
        let resultado = document.getElementsByName("magnitude");
        resultado[0].value = "Magnitude: "+magnitude.toFixed(2)+" - Grande terremoto. Pode causar sérios danos noma "
        +"grande faixa";
    }
    else if(magnitude >= 8){
        let resultado = document.getElementsByName("magnitude");
        resultado[0].value = "Magnitude: "+magnitude.toFixed(2)+" - Enorme terremoto. Pode causar graves danos em"
        +" muitas áreas mesmo que estejam a centenas de quilômetros";
    }

}