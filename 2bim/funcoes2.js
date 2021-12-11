function exercicio1(){ 
    var1 = 4
    var2 = 2
    var3 = 5

    if(!isNaN(var1) && !isNaN(var2) && !isNaN(var3) && var1!=var2 && var1!=var3 && var2 != var3 ){

        if(var1>var2 && var2>var3){
            console.log(var1); 
            console.log(var2); 
            console.log(var3)
        };
        if(var1>var2 && var2<var3 && var1>var3){ 
            console.log(var1);
            console.log(var3); 
            console.log(var2)
        };
        if(var1>var2 && var2<var3 && var1<var3){
            console.log(var3); 
            console.log(var1); 
            console.log(var2)
        }
        if(var1<var2 && var2>var3 && var1>var3){
            console.log(var2); 
            console.log(var1); 
            console.log(var3) 
        };
        if(var1<var2 && var2>var3 && var1<var3){
            console.log(var2); 
            console.log(var3); 
            console.log(var1) 
        };
        if(var1<var2 && var2<var3){
            console.log(var3); 
            console.log(var2); 
            console.log(var1) 
        }
    
    } else { console.log('VALORES INVÁLIDOS!') }
}
