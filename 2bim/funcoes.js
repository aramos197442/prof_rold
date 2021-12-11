
function exercicio1(){ 
    var1 = 9
    var2 = 6
    var3 = 7

    if(!isNaN(var1) && !isNaN(var2) && !isNaN(var3) && var1!=var2 && var1!=var3 && var2 != var3 ){
        if(var1>var2){ 
            if(var1>var3){ console.log(var1);
                if(var2>var3){console.log(var2);
                              console.log(var3);
                } else {console.log(var3);
                        console.log(var2);
                        }
            }else{ console.log(var3);
                   console.log(var1);
                   console.log(var2);
            }
        } else if(var2>var3){console.log(var2);
            if(var1>var3){console.log(var1);
                          console.log(var3); 
            }else {console.log(var3);
                   console.log(var1);
            }
        }else{console.log(var3);
              console.log(var2);
              console.log(var1);
        }
  
             
} else { console.log('VALORES INVÁLIDOS!'); }
}

function exercicio2_sobra_negativo(){
maior = 12
menor = 4

do{
  maior -= menor;
  console.log(maior);
}while (maior >= 0)
}


function exercicio2_sobra_zero(){
maior = 12
menor = 4

while(maior > 0){
  maior-=menor;
  console.log(maior);
}
}

function exercicio3(){
    maior = 5
    menor = 3
    resultado = 0
    
    for(i=1; i<=menor ;i++){
        resultado +=maior;
        console.log(resultado);
    }
}