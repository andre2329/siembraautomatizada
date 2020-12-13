require('./bootstrap');



$(document).on('click', '#iniciar', function () {
    pos = 0;
    pos2 = 88;
    $('#iniciar').prop('disabled', true);
    var t2 ;
    ref = 87;
    velohorizontal = 15;
    var t  = setInterval(move1,velohorizontal);
    show =false;
    velocidad = 0.5;
    velocidad2 = 200;
    maxvelo = 0.5;
    regresandoPlantador =false;
    contador = 1;
    ref1 = (100/6)*contador-2;
    npapa = 1;
    terminahor = false;
    terminaver = false;

    function move1() {
        if(pos>=ref1){
            if(!regresandoPlantador)
            {
                clearInterval(t);
                contador +=1;
            t2  = setInterval(move2,velocidad);
            }
            
        }else{
            if(npapa==56){
                clearInterval(t)
            }else{
                pos+=0.1;
                $('.conjunto').css("left",pos+'%');
            }
            
        }
        
    }
    function move2() {
        if(pos2<=ref){
            clearInterval(t2);
            bajar()
        }else{
            if(npapa==56){
                clearInterval(t2)
            }else{
            pos2-=0.1;
            $('.plantador').css("top",pos2+'%');
        }
        }
    }

    function bajar() {
        $('.plantador').css('background-color',"#f0f0f0")
        t2  = setInterval(subir,velocidad2);
        $("#app > header > div.main > div.papas > div:nth-child("+npapa+")" ).css('top',pos2+"%");
        $("#app > header > div.main > div.papas > div:nth-child("+npapa+")" ).css('left',pos+"%");
        $("#app > header > div.main > div.papas > div:nth-child("+npapa+")" ).show();
        
        npapa+=1;
    }
    function subir() {
        $('.plantador').css('background-color',"#000")
        clearInterval(t2)
        ref = ref - 7.5;
        if(ref<=7){
            t2 = setInterval(regresarPlantador,maxvelo);
            ref1 = (100/6)*contador-2;
            t  = setInterval(move1,velohorizontal);
            
        }else{
            t2  = setInterval(move2,velocidad);
        }
        
        
    }
    function regresarPlantador() {
        
        if(pos2>=87){
            clearInterval(t2);
            regresandoPlantador = false;
            ref = 87;
            if(npapa==56){
                clearInterval(t2);
                clearInterval(t);
                t = setInterval(regresaHorizontal,5);
                t2 = setInterval(regresaVertical,velocidad);
            }
        }else{
            regresandoPlantador = true;
            pos2+=0.1;
            $('.plantador').css("top",pos2+'%');
        }
    }

    function regresaHorizontal() {

        if(pos<=0.1){
            clearInterval(t);
            terminahor = true;
            terminaTodo();
        }else{
            pos-=0.1;
            $('.conjunto').css("left",pos+'%');
        }
        
    }
    function regresaVertical() {
        if(pos2>=88){
            clearInterval(t2);
            terminaver =true;
            terminaTodo();
        }else{
            pos2+=0.1;
            $('.plantador').css("top",pos2+'%');
        }
    }
    function terminaTodo(){
        if(terminahor && terminaver){
            //$('#iniciar').prop('disabled', false);
        }
    }


});