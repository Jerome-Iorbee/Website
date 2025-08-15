<style>
nav{
    margin-top: -1.2%;
    margin-left: -1.2%;
}
ul{
    display: flex;
    flex-direction: row;
    width: 100%;
    background-color: red;
    overflow: hidden;
    gap: 2.5%;
    padding: 1%;
}
li{
    list-style-type: none;
}
li a{
    text-decoration: none;
    color: white;
    font-weight: bolder;
}
.deals{
    display: flex;
    gap: 2%;
    flex-direction: row;
    width: 100%;
}
.deals div{
    width: 100%;
}
.deals img{
    width: 100%;
}
.deals p{
    text-align: justify;
    width: 100%;
}
@media only screen and (max-width: 600px){
    nav{
        margin-top: -4.9%;
        margin-left: -2.1%;
    }
    ul{
        display: flex;
        flex-direction: column;
        width: 100%;
        background-color: red;
        overflow: hidden;
        gap: 2.5%;
        padding: 1%;
    }
    li{
        list-style-type: none;
    }
    li a{
        text-decoration: none;
        color: white;
        font-weight: bolder;
    }
    .deals{
        display: flex;
        gap: 2%;
        flex-direction: column;
        width: 100%;
    }
    .deals div{
        width: 100%;
    }
    .deals img{
        width: 100%;
    }
    .deals p{
        text-align: justify;
        width: 100%;
    }
}
</style>
<link rel="stylesheet" href="css/navflex.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="contact us.php">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>