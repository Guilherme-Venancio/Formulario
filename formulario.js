
     function ver(){
         var imagem =document.querySelector('input[name=mfoto]').files[0];
         var preview =document.getElementById('idfoto');
         var ler = new FileReader();
         ler.onloadend=function(){
             preview.src= ler.result;
         }
        if(imagem){
         ler.readAsDataURL(imagem);
        }else{
            preview.src="";
        }
     }