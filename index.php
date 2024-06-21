
<doctype! html>
    <head>

        <body>
            
            <main class="container">
                <div class="b1">    
            <form>
                <h1 style="color:azure;font-family:georgia;">faça seu pedido</h1>
                <h3 style="color:azure;">xbacon - 20.00 R$</h3>
                <input type="number" id="xbacon" name="xbacon"><br>
                <h3 style="color:azure;">xtudo - 27.00 R$</h3>
                <input type="number" id="xtudo" name="xtudo"><br>
                <h3 style="color:azure;">xsalada - 15.00 R$</h3>
                <input type="number" id="xsalada" name="xsalada"><br>
                <h3 style="color:azure;">suco - 9.50 R$</h3>
                <input type="number" id="suco" name="suco"><br>
               
            </form>
                </div>

                <div class="b2">
            <button onclick="calcular()" id="botao">calcular</button>

            <h1 id="mensagem" style="color:beige;font-family:georgia;"></h1>
            <br><br><br>
            <p style="color:white;font-family:georgia;">
            digite a quantidade <br> de cada lanche que deseja.<br> 
            em seguida, click no botão (calcular).<br>  
            e a conta será gerada.      </p>
            
                </div>
            </main>
            <script>
            function calcular(){

               const quantxbacon=document.getElementById("xbacon").value;
               const quantxtudo=document.getElementById("xtudo").value;
               const quantxsalada=document.getElementById("xsalada").value;
               const quantsuco=document.getElementById("suco").value;
               const xbacon=20.00;
               const  xtudo=27.00;
               const  xsalada=15.00;
               const  suco=9.50;
               const total= quantxbacon*xbacon+quantxtudo*xtudo+quantxsalada*xsalada+quantsuco*suco;
             
               if(quantxbacon!==""||quantxtudo!==""||quantxsalada!==""||quantsuco!==""){

                const mensagemElement=document.getElementById("mensagem");
                mensagemElement.innerHTML="TOTAL :    "  +total.toFixed(2)+ "    R$";


               }
               else{
                alert("DIGITE A QUANTIDADE DESEJADA NOS CAMPOS DO FORMULARIO!");
               
               } 
            }
        </script>
         
                <style>
                    div.b2{
                        padding-top: 3%;
                         background-color:transparent;
                    }button{
                        font-size: 30px;
                        border-color:white;
                        width: 150px;
                        height: 90;
                        color:white;
                        background:orangered;
                        font-family:georgia;
                        cursor:pointer;
                        transition:all 0.5s;
                        border:solid 3px;
                        border-radius:20px;
                    }button:hover{
                       background-color:crimson;
                       box-shadow: 1px 10px 35px 13px yellow;
                       border-color:yellow;
                    }input{
                        background-color:transparent;
                        color:white;
                        width: 80px;
                        height:50px;
                        font-size:20px;
                        border-radius:10px;
                        border:none;
                        border-left: 1px solid white;
                        border-bottom: 2.10px solid white;
                        outline: 0px ;
                        overflow: hidden;
                  

                    }body{
                        margin:1px;
                         background-size:cover;
                         background-image:url("lanche.jpg");
                         
                    }
                </style>  
           <style>
            .container{ 
           text-align:center;
            background-color:transparent;
            display:flex;
            align-items: center;
            justify-content: center;
            height:100vh;
            padding: 60px;

            margin:00.0px;
            gap: 10rem;    
        }
        form {
            border: 2px solid white;
            padding: 20px;
            border-radius:20px; 
             background-color:transparent;
            backdrop-filter:blur(3px);
        }
    </style>
   
        </body>
    </head>
</doctype>

