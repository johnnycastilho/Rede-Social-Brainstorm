var time = 20; // Tempo de digitação em mili segundos
var atual = 0; // indice atual do bloco de texto
var qtd; //Definimos uma variavel
 
$(function(){       
    $('.textosTroca .item').hide();        
    qtd = $('.textosTroca .item').length;       
    setTimeout('digitaTexto('+atual+')',700);   
});   
 
function digitaTexto(item){
    $('.areaTexto').html('');
    objItem = $('.textosTroca .item').eq(item);        
    texto = ($.trim(objItem.html()));       
    if(!objItem.attr('texto')){           
        objItem.attr('texto',texto);            
        objItem.html('');       
    }               
    stringItem = new String(objItem.attr('texto'));               
    setTimeout('efeitoDigita(stringItem,0)',time);   
} 
 
function efeitoDigita(stringItem,n){       
    qtdLetras = stringItem.length;        
    $('.areaTexto').append(stringItem[n]);               
    if((n+1) < qtdLetras){           
        setTimeout('efeitoDigita(stringItem,'+(n+1)+')',time);       
    }else{           
        if((atual+1) < qtd){               
            atual++           
        }else{               
            atual = 0;           
        }           
        setTimeout('digitaTexto('+atual+')',5000);       
    }           
}