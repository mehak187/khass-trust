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
        body{
    font-family: sans-serif;
            
        }
        .alt-link{
            text-align:center;
        }

        .alt-link a{
            transition: all 0.3s;
        }

        .alt-link a:hover{
            text-decoration: none;
        }
        .form-field{
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
}

.form-field input{
    width: 100%;
    margin-top: 10px;
    padding:10px 10px;
        font-family: sans-serif;
}

.login-form {
    max-width: 400px;
    margin: auto;
  height: 100vh;
    display: flex;
    align-items: center;
}

.login-form form {
    width: 100%;
}

.login-form .submit-btn input {
    margin-top: 30px;
    border: 2px solid #00a999e8;
    background: #00a999e8;
    color: #fff;
    padding: 10px ;
    font-size: 18px;
    width: 100%;
    transition: all 0.3s;
}

.login-form .submit-btn input:hover{
    cursor: pointer;
    background: transparent;
    color: #000
}

.login-form h1{
    font-family: sans-serif;
    text-align: center;
    font-size: 40px;
}

.logout-btn a{
    background: yellow;
    padding: 10px 20px;
    color: #000;
    transition: all 0.3s;
}

.logout-btn a:hover {
    opacity: 0.8;
}
.admin-heading {
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.btns_main input {
    background-color: #f49800;
    font-weight: 600;
    text-align: center;
    color: black;
    width: 100%;
    padding: 10px 10px;
    width: calc(50% - 40px);
    cursor:pointer;
}

.btns_main {
    margin-top: 15px;
    display:flex;
    justify-content:space-between;
}

.btns_main input:hover{
    opacity: 0.9;
}

</style>
</body>
</html>