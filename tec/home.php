<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Digital World</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    list-style: none;
}

:root{
    --bg-color:var(--bg-color) #1d2631;
    --tex-color: black;
    --main-color: #34e7f8;
    --other-color: #fcfcfc;
    --h1-font: 4rem;
    --p-font: 1rem;
}


body{
    background-color:#F0F8FF ;
    color: var(--tex-color);
}



header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px 8%;

}


.logo{
    display: flex;
    align-items: center;
    color: var(--tex-color);
    font-size: 28px;
    font-weight: bold;
}

.logo i{
    color: var(--main-color);
    font-size: 32px;
    margin-right: 5px;
}

.navegação{
    display: flex;
}

.navegação a{
    color: var(--other-color);
    font-size: var(--p-font);
    font-weight: 500;
    margin: 0 30px;
    transition: a .55s ease;
}

.navegação a:hover{
    color: var(--main-color);

}


.header-icons{
    display: flex;
    align-items: center;
}

#menu{
    font-size: 35px;
    color: var(--tex-color);
    z-index: 10001;
    cursor: pointer;
}

.header-icons i{
    margin-right: 25px;
    font-size: 28px;
    cursor: pointer;
    transition: all .5s ease;
}

.header-icons i:hover{
    transform: translateY(-5px);
    color: var(--main-color);
}


.section{

    padding: 0 15%;
}
.home{
    position: relative;
    height: 100vh;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
}

.home-text h1{
    font-size: var(--h1-font);
    line-height: 1.2;
    margin-bottom: 2px;
}

.home-text h5{
    color: black;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 60px;
}

.home-text h3{
    font-size: 40px;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 35px;
}


.home-img img{
    max-width: 100%;
    width: 28rem;
    height: auto;
    margin-left: 25%;
}


.btn{
    display: inline-block;
    padding: 15px 70px;
    font-size: 16px;
    font-weight: 500;
    background: transparent;
    border: solid 2px var(--tex-color);
    transition: all.55 ease;
    color: black;
}

.btn:hover{
    background: var(--tex-color);
    border: 2px solid var(--tex-color);
    color: white;
}

.main{
    position: absolute;
    top: 50%;
    left: 3%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 2rem;
}

.main li img{
    width: 50px;
    height: auto;
    max-width: 100%;
}

.row{
    background: var(--main-color);
    height: 70px;
    width: 70px;
    border-radius: 50%;
    justify-content: center;
    transition: all.55s ease;
    cursor: pointer;
    display: inline-flex;
}

.row:hover {
    transform: translateY(-8px);

}

.row2{
    background: #ff758d;
    height: 70px;
    width: 70px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all.55s ease;
    cursor: pointer;
}

.row2:hover{
    transform: translateY(-8px);
}

.row3{
    background: #ffd06d;
    height: 70px;
    width: 70px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all.55s ease;
    cursor: pointer;

}

.row3:hover{
    transform: translateY(-8px);
}
    </style>
</head>
<body>

    <header>
        <a href="home.php" class="logo">Uni-shop</a>

        <ul class="navegação">
        </ul><!--navegação-->

        <div class="header-icons">
            <div id="menu"></div>
        </div><!--header-icons-->
    </header>

    <section class="home">
        <div class="home-img">
            <img src="product1.png" class="one">
        </div><!--home-img-->

        <div class="home-text">

            <h1>Uni<br>Shop</h1>
            <h5>Vendas de objetos roubados Uninorte e Nilton-Lins</h5>
            <h3>R$199.00</h3>
            <a href="cadastro.php" class="btn">cadastra-se</a>

            <a href="login.php" class="btn">login</a>
            
        </div><!--home-text-->
    </section><!--home-->


    <div class="main">
        <div class="row">
            <li><img src="relogio.png" onclick="slider('relogio.png')"></li>
        </div><!--row-->

        <div class="row2">
            <li><img src="celular.png" onclick="slider('celular.png')"></li>
        </div><!--row2-->

        <div class="row3">
            <li><img src="main3.png" onclick="slider('product3.png')"></li>
        </div><!--row3-->
    </div><!--main-->





     
  
    <script>
        function slider (anything){
            document.querySelector ('.one') .src = anything;
        };

       let menu = document.querySelector ('#menu-icon');
       let navbar = document.querySelector ('.navbar');

       menu.onclick = () => {
        menu.classList.toggle ('bx-x');
        navbar.classList.toggle ('open');
       }
    </script>
    
</body>
</html>