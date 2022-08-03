<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Airbnb</title>
    <style>
        *{
    --orangelight: #FFA364;
    --pomegranate: #EB3E1B;
    --orangelighting: #FB6D10;
    --darkorange: #FC7643;
    --orange: #AF4F41;
    --navblue: #273248;
    --blue: #2E2E41;
    --cream: #FFEBD2;
    font-family: 'Comfortaa', cursive;
    font-family: 'Libre Franklin', sans-serif
}

body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    height: 100vh !important;
    font-family: 'Noto Sans', sans-serif;
    color: #222222;
}


#primera-seccion{
    background-color: var(--cream);
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 3rem;

}

.letras{

    text-shadow: 1px 1px 2px #000;
    color: #273248;
}
.ima{
margin-top: 10px;
   
}
.im1{
margin-right: 20px;
margin-left: 05px;
}
.im2{ 
margin-right: 05px;
margin-left: 05px; 
}
.im3{
margin-left: 25px;
   
}
.buscar{
    margin-bottom: 30px;
    border-radius: 25px;
    height: 45px;
}



/* termine primera sección */

/* comienza segunda sección */

   
    #segunda-seccion{
        background: var(--orangelight);
        background-attachment: fixed;
        height: 600px;
        color: white;
        display: flex;
        flex-direction: column;
       

    }
        .conte{
            width: 100%;
            max-width: 1200px;
            height: 200px;
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 30px;
            justify-content: center;
    
        }

        .conte .card
        { 
            width: 230px;
            height: 330;
            border-radius: 8px;
            box-shadow: 0 2px 2px #000;
            overflow: hidden;
            margin: 10px;
            text-align: center;
            transition: all 0.25s;
            background: var(--orangelighting);
        }
            .conte .card:hover{
                transform: translate(-15px);
                



            }
            .conte .card img{
                width: 500px;
                height: 200px;
            }
            
             .conte .card h2{
               font-family: 'Lobster', cursive;;
               
               color: #FFF;

            }

   #footer-inicio{
        background: var(--navblue) ;
        background-attachment: fixed;
        height: 300px;
        color: white;
        display: flex;
        flex-direction: column;
       

    }

    #footer-inicio .container-footer a{
        color: white;
        text-decoration: none;
    }
 

@media(max-width:522px){
    #primera-seccion{
        padding-left: 1rem;
        padding-right: 1rem;
    }

    #barra-navegacion{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: auto;
        padding-top: 2rem;
        padding-bottom: 0;
    }
}
    </style>
</head>
<body>
    <div id="primera-seccion">

    <div align="center">
        <input type="search" name="" class="buscar" size="45"></div>

    <center><label class="letras">¿Qué estás buscando?</label></center>
    <div align="center">
        <img src="{{ asset('images/h.png') }}" width="150"  class="im1">
        
        <img src="{{ asset('images/cabania.png') }}"  width="160" class="im2">
        
        <img src="{{ asset('images/casa.png') }}"   width="155"class="im3">
        
    </div>

        
    </div>
        
    <div id="segunda-seccion">
    
    <div class="conte">

    <div class="card">

    <a href=""><img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 1</h2>
        
    </div>
    

    
    <div class="card">
        <a href=""><img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 2</h2>
        
    </div>
    

    <div class="card">
        <a href=""> <img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 3</h2>
        
    </div>

    <div class="card">
        <a href=""><img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 4</h2>
        
    </div>
</div>
</div>

<footer id="footer-inicio">
<div>
        <div class="container-footer">
            <a href="">Sobre nosotros</a>
            <a href="">Contactanos</a>
            <a href="">Otra Opcion</a>
        </div>
        <hr>
</div>
</footer>

</body>
</html>