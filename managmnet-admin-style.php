<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td{
    text-align: center;
    font-size: 20px;
}
tr{
    max-width: 100%;
    width: 550px;
    display: flex;
    font-size: 25px;
    justify-content: space-around;
    text-align: center;
}
.overflow-y-auto{
    height: 100vh;
}
tbody tr {
    max-width: 100%;
    width: 700px;
    border: 1px solid;
    margin-bottom: 5px;
    padding: 10px;
    background-color: #f2f2f2;
}
.overflow-y-auto{
    height: 800px;
}
textarea{
    outline: none;
}
.admin-about-btn1,.admin-about-btn2{
    border: 1px solid;
    padding: 3px 15px;
    background-color: #004a6a;
    color: #fff;
} 
.admin-about-btn2{
    background-color: #ff1d00;
}
table{
    width: 500px;
    margin: auto;
}
th[scope=col] a {
    width: max-content;
    position: relative;
    display: flex;
    justify-content: space-around;
    left: 120%;
}
th[scope=col]{
    font-weight: 400;
}
th[scope=col] h1{
width: 70px;
    font-weight: 400;
    font-size: inherit;
}
a.primray-btn{
    padding: 2px 10px;
    color: #fff;
    font-size: 20px;
    background-color: #00ff61;
}
.discripition input {
    display: flex;
    flex-direction: column;
    padding: 10px 50px;
    border-radius: 12px;
    width: max-content;
    margin: auto;
    align-items: center;
    color: #fff;
    text-align: center;
    background-color: #0068fe;
}

/* #######media quires############# */
@media (max-width:950px){
    tbody tr {
        max-width: 100%;
        width: 500px;
    }
    tr {
        max-width: 100%;
        width: 355px;
    }
}


/* ########### Addd Abouts Page CSS##################  */
.about-changes{
    display: flex;
    justify-content: space-between;
    margin: 50px auto;
    width: 900px;
}
h1{
    font-size: 20px;
    font-weight: 400;
}
.header{
    width: 500px;
}
.header,.img{
    display: flex;
    flex-direction: column;
    /* height: 90px; */
    justify-content: space-between;
}

.img input {
    margin-top:15px;
}
.img h1{
    width: max-content;
}
.img a i{
    border: 1px solid;
    font-size: 15px;
    height: 56px;
    padding: 20px;
    border-radius: 50%;
    text-align: center;
}
.discripition .img1 a{
    border: 1px solid;
    font-size: 30px;
    background-color: #fff;
    color: black;
    padding: 30px 70px;
    margin: 0%;
    border-radius: 8px;
    text-align: center;
}
.header textarea{
    max-width: 100%;
    width: 80%;
    padding: 15px;
    border-radius: 10px;
    outline: none;
}
.discripition{
    margin: 50px auto;
    align-items: baseline;
    width: 900px;
}
.discripition textarea{
    max-width: 100%;
    width: 100%;
    height: 150px;
    border-radius: 10px;
    padding: 10px;
    outline: none;
}
.img{
    width: 150px;
}
.imgss{
    display: flex;
    justify-content: space-between;
    margin: auto;
}
.discripition a{
    display: flex;
    flex-direction: column;
    padding: 10px 50px;
    border-radius: 12px;
    width: max-content;
    margin: auto;
    align-items: center;
    color: #fff;
    text-align: center;
    background-color: #0068fe;
}
.admin-home h1{
font-size: 30px;
font-weight: 700;
}

/* ####responsive################# */
@media (max-width:1150px){
    .discripition,.about-changes{
        width: 620px;
    }
    /* .temp{
        flex-direction: column;
    } */
}
@media (max-width:880px){
    .discripition, .about-changes{
        width: 400px;
        flex-direction: column;
    }
    .header {
        width: 100%;
    }
    .header textarea {
        max-width: 100%;
        width: 100%;
}
}
@media (max-width:600px){
    .discripition, .about-changes {
        width: 200px;
        flex-direction: column;
    }
    h1 {
        font-size: 15px;
        font-weight: 400;
    }
    .admin-home h1 {
        font-size: 28px;
        font-weight: 700;
    }
    .discripition .img1 a{
        margin:10px  auto;
    }
    .imgss{
        flex-direction: column;
    }
}
@media (max-width:2700px) and (min-width:1769px){
    .about-changes {
        display: flex;
        margin: 50px auto;
        width: 80%;
    }
    .header,.discripition {
        width: 80%;
    }
    h1 {
        font-size: 40px;
    }
    .header textarea {
        padding: 40px;
    }
    .discripition textarea {
        max-width: 100%;
        width: 100%;
        height: 200px;
    }
}
tr {
    max-width: 100%;
    width: 700px;
    display: flex;
    font-size: 25px;
    justify-content: space-around;
    text-align: center;
}
    </style>
</body>
</html>