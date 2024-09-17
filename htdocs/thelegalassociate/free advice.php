<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Legal World</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <style>
    :root{
        --main-color:#DA2C32;
        --light-color:#666;
        --light-bg:#eee;
        --white:#fff;
        --black:#303030;
        --border:.1rem soild var(--light-color);
        --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    }
    
    body{
        background-color: var(--light-bg);
    }
    
    *{
        font-family: 'Montserrat' , sans-serif;
        margin: 0; padding: 0;
        box-sizing: border-box;
        outline: none; border: none;
        text-decoration: none;   
    }
    
    
    *::selection{
        background-color: var(--main-color);
        color: var(--white);
    }
    
    *::-webkit-scrollbar{
        height: .5rem;
        width: 1rem;
    }
    
    *::-webkit-scrollbar-track{
        background-color: transparent;
    }
    
    *::-webkit-scrollbar-thumb{
        background-color: var(--main-color);
        border-radius: 5rem;
    }
    
    
    html{
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 10rem;
    }
    
    body{
        background-color: var(--light-bg);
    }
    
    section{
        padding: 3rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }
    /*------------------our service-------------------------*/
    
    
    
    .heading{
        text-align: center;
        padding-bottom: 2.5rem;
        font-size: 3rem;
        color: var(--black);
        text-transform: capitalize;
    }
    
    .btn,
    .inline-btn{
        margin-top: 1rem;
        padding: 1rem 3rem;
        background-color: var(--main-color);
        color: var(--white);
        cursor: pointer;
        text-align: center;
        font-size: 1.8rem;
        text-transform: capitalize;
    }
    
    
    .btn:hover,
    .inline-btn:hover{
        background-color: var(--black);
    }
    
    .btn{
        display: block;
        width: 100%;
    }
    
    .inline-btn{
        display: inline-block;
    }
    
    .header{
        position:sticky;
        top: 0; left: 0; right: 0;
        z-index: 1000;
        box-shadow: var(--box-shadow);
    }
    
    .header .navbar.nav-2 .flex{
        padding-top: 0;
        padding-bottom: 0;
    }
    
    .header .navbar.nav-1{
        background-color: var(--black);
    }
    
    .header .navbar.nav-2{
        background-color: var(--white);
    }
    
    .header .navbar .flex{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .header .navbar .flex .logo{
        font-size: 2.2rem;
        color: var(--white);
    }
    
    .header .center form .flex{
        gap: 0;
    }
    
    .header .navbar .flex .logo i{
        color: var(--main-color);
        margin-right: 1rem;
    
    }
    
    .header .navbar .flex ul{
        list-style: none;
    }
    
    
    
    .header .navbar .flex ul li a{
        display: inline-block;
        padding: 1.2rem 2rem;
        background: var(--white);
        font-size: 1.8rem;
        color: var(--black);
        background-color: var(--white);
    }
    
    .header .navbar .flex ul li{
        float: left;
        position: relative;
    }
    .header .navbar .flex ul li a:hover{
        background-color: var(--main-color);
        color: var(--white);
    }
    
    .header .navbar .flex ul li a i{
        margin-left: 1rem;
    }
    
    .header .navbar .flex ul li ul{
        position: absolute;
        width: 17rem;
        left: 0;
    }
    
    .header .navbar .flex ul li ul li ,a{
        width: 100%;
    }
    
    
    .header .navbar .flex ul li ul li a{
        display: none;
    }
    
    .header .navbar .flex ul li:hover ul li a{
        display: block;
    }
    
    #menu-btn{
        font-size: 2.5rem;
        color: var(--black);
    }
    
    .home{
      /*  background:url('../image - Copy/libary.jpg') no-repeat;*/
        background-size: cover;
        background-position: center;
    }
    
    .home .center{
        min-height: 63vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .home .center form{
        background-color: var(--white);
        padding: 2rem;
        box-shadow: var(--box-shadow);
        width: 50rem;
    }
    
    .home .center form h3{
        padding-bottom: 1rem;
        text-align: center;
        color: var(--black);
        text-transform: capitalize;
        font-size: 2.5rem;
       
    }
    
    .home .center form .flex{
        display: flex;
        gap:1rem;
        flex-wrap: wrap;
    }
    
    
    .home .center form .box{
        flex: 1 1 20rem;
    }
    
    .home .center form .box .input{
        width: 100%;
        border: var(--border);
        padding: 1.4rem;
        color: var(--black);
        font-size: 1.8rem;
        margin: 1rem 0;
       
    }
    
      
    
    .home .center form .box p{
        color: var(--light-color);
        font-size: 1.7rem;
        padding-top: 1rem;
    }
    
    
    
    .home .center form .box p span{
        color: var(--main-color);
    }
    
    
    
    
    
    .services .box-container{
        display: grid;
        grid-template-columns: repeat(auto-fit, 30rem);
        gap: 1.5rem;
        justify-content: center;
        align-items: flex-start;
    }
    
    .services .box-container .box{
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
        text-align: center;
    }
    
    
    .services .box-container .box img{
        margin: 1rem 0;
        height: 8rem;
    }
    
    
    .services .box-container .box h3{
        font-size: 2rem;
        padding: 1rem 0;
        color: var(--black);
        text-transform: capitalize;
    }
    
    
    
    .services .box-container .box p{
        line-height: 2;
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    .listings .box-container{
        display: grid;
        grid-template-columns: repeat(auto-fit, 35rem);
        gap: 2rem;
        justify-content: center;
        align-items: flex-start;
    }
    
    
    .listings .box-container .box{
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
    }
    
    
    .listings .box-container .box .flex{
        display: flex;
        background-color: var(--light-bg);
        padding: 1.5rem;
        justify-content: space-between;
        align-items: center;
        margin: 1.5rem 0;
    }
    
    
    .listings .box-container .box .admin{
        display: flex;
        align-items: center;
        gap: 1.5rem; 
    }
    
    .listings .box-container .box .admin h3{
        height: 4.5rem;
        align-items: center;
        width: 4.5rem;
        border-radius: 50%;
        font-size: 2rem;
        color: var(--black);
        background-color: var(--light-bg);
    }
    
    
    .listings .box-container .box .thumb{
        position: relative;
        height: 25rem;
        overflow: hidden;
    
    }
    
    
    .listings .box-container .box .thumb img{
        height: 100%;
        width: 100%;
        transition: .2s linear;
    }
    
    .listings .box-container .box:hover .thumb img{
        transform: scale(1.1);
    }
    
    
    .listings .box-container .box .thumb .total-image{
        position: absolute;
        top: 1rem; left: 1rem;
        background-color: rgba(0,0,0,.3);
        color: var(--white);
        padding: .5rem 1.5rem;
        font-size: 1.6rem;
        z-index: 1;
    }
    
    .listings .box-container .box .thumb .total-image i{
        margin-right: .7rem;
    }
    
    
    .listings .box-container .box .thumb .type{
        position: absolute;
        bottom: 1rem; left: .7rem;
        z-index: 1;
    }
    
    .listings .box-container .box .thumb .type span{
        margin-right: .7rem;
        padding: .5rem 1.5rem;
        color: var(--white);
        background-color: var(--main-color);
        font-size: 1.6rem;
    
    }
    
    .listings .box-container .box .thumb .save{
        position: absolute;
        top: 1rem; right: 1rem;
        z-index: 1;
    }
    
    
    .listings .box-container .box .thumb .save button{
        background-color: rgba(0,0,0,.3);
        color: var(--white);
        padding: .7rem 1rem;
        font-size: 1.6rem;
        cursor: pointer;
    
    }
    
    .listings .box-container .box .thumb .save button:hover{
        background-color: var(--main-color);
    }
    
    .listings .box-container .box .name{
        font-size: 2rem;
        text-overflow: ellipsis;
        overflow-x: hidden;
        color: var(--black);
    }
    
    .listings .box-container .box .location{
        padding-top: 1rem;
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    .listings .box-container .box .location i{
        margin-right: 1rem;
        color: var(--main-color);
    }
    
    
    .listings .box-container .box .flex{
        display: flex;
        background-color: var(--light-bg);
        padding: 1.5rem;
        justify-content: space-between;
        align-items: center;
        margin: 1.5rem 0;
        flex-wrap: wrap;
        gap: 1.5rem;
    }
    
    
    .listings .box-container .box .flex p{
        font-size: 1.6rem;
        flex: 1 1 7rem;
    }
    
    
    .listings .box-container .box .flex p span{
        color: var(--light-color);
    }
    
    
    .listings .box-container .box .flex p i{
        margin-right: 1rem;
        color: var(--main-color);
    }
    
    
    
    .view-property .details{
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
        overflow-x: hidden;
    }
    
    .view-property .details .thumb{
        background-color: var(--black);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .view-property .details .thumb .big-image img{
        height: 40rem;
        width: 100%;
        object-fit: contain;
    }
    
    .view-property .details .thumb .small-images{
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        padding-top: 1rem;
        flex-wrap: wrap;
    }
    
    .view-property .details .thumb .small-images img{
        height: 7rem;
        width: 10rem;
        object-fit: cover;
        cursor: pointer;
        transition: .2s linear;
    }
    
    .view-property .details .thumb .small-images img:hover{
        transform: scale(1.1);
    }
    
    .view-property .details .name{
        font-size: 2rem;
        text-overflow: ellipsis;
        overflow-x: hidden;
        margin-bottom: .5rem;
    }
    
    .view-property .details .location{
        padding-top: 1rem;
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    .view-property .details .location i{
        margin-right: 1rem;
        color: var(--main-color);
    }
    
    .view-property .details .info{
        display: flex;
        background-color: var(--light-bg);
        padding: 1.5rem;
        margin: 1.5rem 0;
        justify-content: space-between;
        align-items: center;
        text-wrap: wrap;
        gap: 2rem;
    }
    
    .view-property .details .info p{
        font-size: 1.7rem;
    }
    
    .view-property .details .info p span,
    .view-property .details .info p a{
        color: var(--light-color);
    }
    
    .view-property .details .info p a:hover{
        text-decoration: underline;
    }
    
    .view-property .details .info p i{
        margin-right: 1.5rem;
        color: var(--main-color);
    }
    
    .view-property .details .title{
        font-size: 2rem;
        color: var(--black);
        padding-bottom: 1.5rem;
        border-bottom: var(--border);
    }
    
    .view-property .details .flex{
        margin: 1.5rem 0;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    
    }
    
    .view-property .details .flex .box{
        flex: 1 1 40rem;
    }
    
    .view-property .details .flex .box p{
        padding: .5rem 0;
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    .view-property .details .flex .box i{
        color: var(--main-color);
        margin-right: 1.5rem;
    }
    
    .view-property .details .description{
        padding: .5rem 0;
        margin-top: .5rem;
        font-size: 1.6rem;
        color: var(--light-color);
        line-height: 1.5;
    }
    
    .about .row{
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        align-items: center;
    }
    
    .about .row .image{
        flex: 1 1 40rem;
    }
    
    .about .row .image img{
        width: 100%;
    }
    
    
    
    .about .row .content{
        flex: 1 1 40rem;
        text-align: center;
    }
    
    
    .about .row .content h3{
        font-size: 2.5rem;
        color: var(--black);
        margin-bottom: .5rem;
        text-transform: capitalize;
    }
    
    
    .about .row .content p{
        line-height: 2;
        padding: 1rem 0;
        font-size: 1.7rem;
        color: var(--light-color);
      
    }
    
    
    .steps .box-container{
        display: grid;
        grid-template-columns: repeat(auto-fit, 32rem);
        gap: 2rem;
        justify-content: center;
        align-items: flex-start;
    
    }
    
    
    .steps .box-container .box{
        background-color: var(--white);
        padding: 2rem;
        text-align: center;
        box-shadow: var(--box-shadow);
    }
    
    
    
    .steps .box-container .box img{
        height: 7rem;
        margin: .5rem 0;
        font-size: 2rem;
        text-transform: capitalize;
        color: var(--black);
    }
    
    
    .steps .box-container .box p{
        line-height: 2;
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    .reviews .box-container{
        display: grid;
        grid-template-columns: repeat(auto-fit, 35rem);
        gap: 2rem;
        justify-content: center;
        align-items: flex-start;
    }
    
    .reviews .box-container .box{
        background-color: var(--white);
        padding: 2rem;
        box-shadow: var(--box-shadow);
    }
    
    .reviews .box-container .box .user{
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 1rem;
    }
    
    
    .reviews .box-container .box .user img{
        height: 7rem;
        width: 7rem;
        border-radius: 50%;
    }
    
    
    .reviews .box-container .box .user h3{
        font-size: 2rem;
        color: var(--black);
        padding-bottom: .3rem;
    }
    
    
    .reviews .box-container .box .user .stars i{
        font-size: 1.5rem;
        color: var(--main-color);
    
    }
    
    
    .reviews .box-container .box p{
        line-height: 2;
        padding-top: 1rem;
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    .contact .row{
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        align-items: center;
    }
    
    .contact .row image{
        flex: 1 1 40rem;
    }
    
    .contact .row image img{
        width: 100%;
    }
    
    .contact .row form{
        flex: 1 1 30rem;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
    }
    
    .contact .row form h3{
        padding-bottom: 1rem;
        font-size: 2.5rem;
        color: var(--black);
        text-align: center;
        text-transform: capitalize;
    }
    
    .contact .row form .box{
        width: 100%;
        border: var(--border);
        padding: 1.4rem;
        color: var(--black);
        font-size: 1.8rem;
        margin: 1rem 0;
    }
    
    .contact .row form textarea{
        height: 15rem;
        resize: none;
    }
    
    
    .faq .box-container{
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: flex-start;
    }
    
    .faq .box-container .box{
        flex: 1 1 40rem;
        box-shadow: var(--box-shadow);
    }
    
    .faq .box-container .box h3{
        padding: 1.5rem;
        font-size: 2rem;
        background-color: var(--black);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        cursor: pointer;
    }
    
    
    .faq .box-container .box p{
        font-size: 1.6rem;
        color: var(--light-color);
        background-color: var(--white);
        padding: 1.5rem 2rem;
        line-height: 1.5;
        display: none;
    }
    
    
    .faq .box-container .box.active p{
        display: block;
    }
    
    
    .faq .box-container .box.active h3{
        background-color: var(--main-color);
    }
    
    
    .filters form{
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
    }
    
    .filters form #close-filter{
        text-align: right;
        padding-bottom: 2rem;
       display: none;
    }
    
    
    .filters form #close-filter i{
        height: 4.5rem;
        width: 4.5rem;
        line-height: 4.4rem;
        background-color: var(--main-color);
        color: var(--white);
        cursor: pointer;
        font-size: 2rem;
        text-align: center;
    }
    
    .filters form #close-filter i:hover{
        background-color: var(--black);
    }
    
    .filters form h3{
        font-size: 2.5rem;
        padding-bottom: 2rem;
        color: var(--black);
        text-transform: capitalize;
        text-align: center;
    }
    
    .filters form .flex{
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .filters form .flex .box{
        flex: 1 1 40rem;
    }
    
    .filters form .flex .box .input{
        width: 100%;
        margin: 1rem 0;
        font-size: 1.8rem;
        color: var(--black);
        border: var(--border);
        padding: 1.4rem;
    }
    
    .filters form .flex .box p{
        font-size: 1.6rem;
        color: var(--light-color);
    }
    
    #filter-btn{
        position: fixed;
        bottom: 1rem; right: 1rem;
        background-color: var(--border);
        color: var(--white);
        text-align: center;
        height: 4.5rem;
        width: 4.5rem;
        line-height: 4.4rem;
        z-index: 1000;
        font-size: 2rem;
        background-color: var(--main-color);
        display: none;
    
    }
    
    .form-container form{
        max-width: 50rem;
        margin: 0 auto;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
        text-align: center;
    }
    
    .form-container form h3{
        padding-bottom: 1rem;
        font-size: 2.5rem;
        color: var(--black);
        text-transform: capitalize;
    }
    
    .form-container form .box{
        border: var(--border);
        padding: 1.4rem;
        color: var(--black);
        margin: 1rem 0;
        width: 100%;
        font-size: 1.8rem;
    }
    
    .form-container form p{
        font-size: 1.7rem;
        padding: 1rem 0;
        color: var(--light-color);
    }
    
    .form-container form p a{
        color: var(--main-color);
    }
    
    .form-container form p a:hover{
        text-decoration: underline;
    }  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    .footer{
        background-color: var(--black);
    
    }
    
    .footer .flex{
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: space-between;
    }
    
    .footer .flex .box {
        flex: 1 1 30rem;
    }
    
    .footer .flex .box a{
        display: block;
        padding: 1rem 0;
        font-size: 1.8rem;
    
    }
    
    
    .footer .flex .box a span{
        color:var(--white) ;
    }
    
    .footer .flex .box a:hover span{
        text-decoration: underline;
    }
    
    .footer .flex .box a i{
        color: var(--main-color);
    }
    
    
    
    .footer .flex .box:last-child{
        text-align: right;
    }
    
    .footer .flex .box:last-child a i{
        margin-left: 1.5rem;
    }
    
    .footer .flex .box:last-child a i{
        margin-right: 1.5rem;
    }
    
    .footer .flex .box:nth-child(2){
        text-align: center;
    }
    
    
    .footer .credit{
        padding: 3rem 2rem;
        text-align: center;
        border-top: .1rem solid var(--white)  ;
        font-size: 2rem;
        color: var(--white);
        margin-top: 2rem;
    }
    
    .footer .credit span{
        color: var(--main-color);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    @media (max-width:991px){
    
        html{
            font-size: 55%;
        }
    } 
    
    
    @media (max-width:768px){
    
        #menu-btn{
            display: inline-block;
        }
    
    
        .header .navbar .menu{
            position: absolute;
            top: 99%; left: 0; right: 0;
            background-color: var(--white);
            border-top: var(--border);
            transition: .2s linear;
            z-index:1;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        }
    
        .header .navbar .menu.active{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    
        }
    
    
        .header .navbar .menu ul li {
            width: 100%;
            position: relative;
            
        }
    
        .header .navbar .menu ul li a{
            width: 100%;
        }
    
        .header .navbar .menu ul li ul{
            position: relative;
            width: 100%;
        }
    
        .header .navbar .menu ul li ul li a{
            padding-left: 4rem;
            background-color: var(--black);
            color: var(--white);
        }
    
        .view-property .details .thumb .big-image img{
            height: auto;
        }
    
        .view-property .details .thumb .small-images img{
            height: 5rem;
            width: 9rem;
        }
    
        #filter-btn{
            display: inline-block;
        }
    
       
        .filters{
             position: fixed;
             top: 0; left: 0; right: 0; bottom: 0;
             overflow-y: scroll;
             background-color: var(--white);
             z-index: 1100;
             padding: 0;
             display: none;
        }
    
       .filters from{
            box-shadow: none;
        } 
    
        .filters.active{
            display: block;
        }
    
        .filters from #close-filter{
            display: block;
        }   
    }
    
    
    
    
    @media (max-width:450px){
    
        html{
            font-size: 50%;
        }
    
        .header .navbar .flex .logo{
            font-size: 1.8rem;
        }
    
        .home .center form .flex{
            gap: 0;
        }
    
        .listings .box-container{
                grid-template-columns: 1fr;
        }
    
        .reviews .box-container{
            grid-template-columns: 1fr;
        }
    
    
    } 
    
    
</style>



<header class="header">
        <nav class="navbar nav-1">
      
         <section class="flex">
             <a herf="index.html" class="logo"><i class="fa fa-gavel" style="font-size:48px;color:red"></i>
                
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
             </i>The Legal Associate</a>
             <ul>
                 <li><a href="book appointment.php">Book Appointment<i class="fas fa-paper-plane"></i></a></li>
             </ul>
      
         </section>
      </nav>
      
      <nav class="navbar nav-2">
         <section class="flex">
             <div id="menu-btn" class="fas fa-bars"></div>
      
             <div class="menu">
              <ul>
            <!----     <li><a herf="#">Menu<i class="fas fa-angle-down"></i></a>
                      <ul>-->
      
                 <li><a href="home.html"><i class="fa fa-fw fa-home"></i>Home</a></li>
                 <li><a href="about (2).html"><i class="fa fa-fw fa-envelope"></i>About</a></li>
                 <li><a href="online drafting.html"><i class="fa fa-fw fa-envelope"></i>Online Drafting</a></li>
                 <li><a href="practice area.html"><i class="fa fa-fw fa-envelope"></i>Practice Area</a></li>             
                 <li><a href="free advice.php"><i class= "fa fa-fw fa-user"></i>Free Advice</a></li>
       
                </ul>
              </li>
      
      
    
      
              </ul>
             </div>
      
           
           
      
         </section>
      </nav>
      
      
      </header>














      
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: orangered;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<div class="container">
    
  <div style="text-align:center">
    <h1>Get in Touch</h1>
  </div>
  <div class="row">
    <div class="column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.068279445096!2d81.01023477522276!3d26.8695716766729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2969da65323%3A0x14abe6084403e004!2sHigh%20Court%2C%20236%2C%20near%20Head%20Office%20Nagar%20Evam%20Gram%20Niyojan%20Vibhag%20U.P.%20High%20Court%2C%20opp.%20Experion%20Building%2C%20Vijayipur%2C%20Vibhuti%20Khand%2C%20Gomti%20Nagar%2C%20Lucknow%2C%20Uttar%20Pradesh%20226010!5e0!3m2!1sen!2sin!4v1700476089510!5m2!1sen!2sin" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    <div class="column">
     
    <form action="save.php" method="post">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Enter your name.">
        <label for="fname">Address With City</label>
        <input type="text" id="fname" name="address" placeholder="Enter your address with city.">
        
        <label for="fname">Select releated query</label>
  

        <select id="query" name="query" placeholder="Enter your name.">   
           <option value="GST Registration">GST Registration</option>
           <option value="Income Tax Filling">Income Tax Filling</option>
           <option value="Shop and Establishment
            (Labor)Registration">Shop and Establishment
            (Labor)Registration</option>
           <option value="FSSAI Registration">FSSAI Registration</option>
           <option value="Society Registration">Society Registration</option>
           <option value="Civil Case">Civil Case</option>
           <option value="Criminal Cases">Criminal Cases</option>
           <option value="Family Court">Family Court</option>
           <option value="Writs">Writs</option>
           <option value="Consumer Court">Consumer Court</option>
           <option value="RTI">RTI</option>
           <option value="Bail">Bail</option>
           <option value="Property and Contract Registration">Property and Contract Registration</option>
           <option value="Will Registration">Will Registration</option>
           <option value="Labour Court">Labour Court</option>
           <option value="NI Act">NI Act</option>
           <option value="Miscellaneous">Miscellaneous</option>
        </select>
      
        <label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="Enter your email">
        <label for="lname">Mobile No.</label>
         <input type="text" id="lname" name="mobile" placeholder="Enter your mobile no.">
        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write you need " style="height:170px"></textarea>
        <input type="submit" name="send" value="Submit">
        <input type="hidden" name="_captcha" value="false">
     
      </form>
    </div>
  </div>
</div>














</body>
</html>


































<footer class="footer">
    <section class="flex">
        <div class="box">
            <h3 style="color: orangered; size: x-large;">Some About</h3>

            <a href="#"></i><span>The Legal Associate is founded by <ul>Advocate Harsh Gupta with</ul><ul> the help of Advocate Anurag </ul><ul>Srivastava and Advocate</ul><ul>Avinash Chandra in 2023</ul><ul></ul> with the vision to provide</ul><ul> a quality based and complete</ul><ul> legal service to the</ul><ul> client in Lucknow .</ul><ul>and nearby cities.</ul></span></a>
            

        </div>

        <div class="box">
            <h3 style="color: orangered; size: x-large;">Important Link</h3>
            <a href="#"><span>Terms & Conditions</span></a>
            <a href="#"><span>Privacy Policy</span></a>
            <a href="#"><span>Know The Law</span></a>
            <a href="#"><span>All Listings</span></a>
            <a href="#"><span>Law Firms</span></a>
            <a href="#"><span>RTI Updates</span></a>

        </div>

        <div class="box">
            <h3 style="color: orangered; size: x-large;">Get In Touch</h3>

            <a href="#"><i class="fas fa-phone"></i><span>8840600757</span></a>
            <a href="mailto:thelegalassociate0@gmail.com"><i class="fas fa-envelope"></i><span>thelegalassociate0@gmail.com</span></a>
            <a href="#"><i class="fas fa-map-marker-alt"></i><span>High Court, Lucknow</span></a>
            <a href="https://www.facebook.com/profile.php?id=61551953876375&mibextid=ZbWKwL"><span>Facebook</span><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/ThelegalWorld88"><span>Twitter</span><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/thelegal-world-b86683293"><span>Linkedin</span><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/thelegalworld88/"><span>Instagram</span><i class="fab fa-instagram"></i></a>

        </div>
    </section>

    <div class="credit">&copy; copyright @ 2024 by <span>The Legal Associate</span>| all rights reserved
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=20x20&data=https%3A%2F%2Fappurl.io%2FXaNiiOXXhq"/>

    </div>
</footer>









    
    
    
    
    
    
    
        <script src="js/script.js"></script>
    
        <script>
    
          let menu = document.querySelector('.header .menu');
    
             document.querySelector('#menu-btn').onclick = () =>{
              menu.classList.toggle('active');
            }
    
          window.onscroll = () =>{
           menu.classList.remove('active');
           }
    
          document.querySelectorAll('.view-property .details .thumb .small-images img').forEach(images =>{
           images.onclick = () =>{
              src = images.getAttribute('src');
              document.querySelector('.view-property .details .thumb .big-image img').src = src;
           }
         });
        </script>
    
        
    
        
        
    </body>
    </html>


    <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{
        
        $name  = $_POST['name'];
        $address  = $_POST['address'];
        $query  = $_POST['query'];
        $email  = $_POST['email'];
        $mobile  = $_POST['mobile'];
        $message  = $_POST['message'];




//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'thelegalassociate0@gmail.com';                     //SMTP username
    $mail->Password   = 'hoektfocqraflgul';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('thelegalassociate0@gmail.com', 'Free Advice');
    $mail->addAddress('thelegalassociate0@gmail.com', 'The Legal Associate');     //Add a recipient
    

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Free Advice';
    $mail->Body    = "<li><b>Sender Name</b> - $name</li> <li><b>Sender Address</b> - $address </li><li><b>Sender Query</b> - $query </li><li> <b>Sender Email</b> - $email</li><li><b>Sender Mobile</b> - $mobile</li><li> <b>Sender Message</b> - $message</li>";

    $mail->send();
    echo "<div class='success'> Message Has Been Sent!</div>";
} catch (Exception $e) {
    echo "<div class='alert'> Message Could't Sent!</div>";
}









}




    
    
    
    
?>

    
    
    
    
    