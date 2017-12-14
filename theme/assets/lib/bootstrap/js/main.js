function validateForm(){
    var name = document.getElementById("userName");
    name_regexp = /^([A-Za-zА-Яа-яЁё]+){3,}$/;
    var errorName = document.getElementById("errorName");
    if (!name_regexp.test(name.value)) {
        errorName.innerHTML = "Пожалуйста, введите свое настоящее имя!";
        document.getElementById('userName').value="";
    }

    var email = document.getElementById("userEmail");
    email_regexp = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
    var errorEmail = document.getElementById("errorEmail");
    if (!email_regexp.test(email.value)) {
        errorEmail.innerHTML = "Пожалуйста, введите свой e-mail!";
        document.getElementById('userEmail').value="";  
    }

    return true;
}

/*
var a = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Доска желаний</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>
                        <p class="text-center"><strong>Доска желаний</strong></p>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <form action="#" method="post" role="form" class="form-horizontal">
                        <p><i>Пожалуйста, заполните форму. Обязательные поля помечены </i><em>*</em></p>
                        <fieldset>
                            <legend>Добавить желание:</legend>
                            <div class="form-group">
                                <label for="userName" class="col-sm-3 control-label">Имя:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="userName" id="userName" placeholder="Enter name" pattern="^([A-Za-zА-Яа-яЁё]+){3,}$" onchange="checkName()"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userEmail" class="col-sm-3 control-label">E-mail:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Enter email" pattern="^[A-Za-z\.0-9_-]+@[A-Za-z\.0-9_-]+\.([A-Za-z]+){2,}$i" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="commentUser" class="col-sm-1 control-label">Желание:</label>
                                <div class="col-sm-12">
                                <textarea name="commentUser" id="commentUser" class="form-control" rows="3" placeholder="Enter comment" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/main.js"></script>
    </body>
</html> 
*/