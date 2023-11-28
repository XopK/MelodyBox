<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-links></x-links>
</head>

<body>

    <x-header></x-header>

    <div class="container mt-5">
        <h1 class="text-center text-white">Добро пожаловать в админ панель NAME</h1>
        <div class="d-flex justify-content-between mt-5">
            <div class="menu text-white d-flex flex-column ">
                <p class="d-flex align-items-center mx-2 mt-2"><img src="/img/Chat_plus_fill.svg" alt="chat">Заявки
                    "Стать автором"
                </p>
                <div class="d-flex flex-column mx-2">
                    <div class="hr1"></div>
                    <p class="d-flex align-items-center mt-2"><img src="/img/new.svg" alt="new"><a
                            href="">Новые заявки</a></p>
                    <p class="d-flex align-items-center"><img src="/img/deny.svg" alt="deny"><a
                            href="">Отклонённые заявки</a></p>
                    <p class="d-flex align-items-center"><img src="/img/accept.svg" alt="accept"><a
                            href="">Одобренные заявки</a></p>
                </div>
                <div class="d-flex flex-column">
                    <div class="authors d-flex align-items-center">
                        <img src="/img/men.svg" alt="authors" class="mx-2 py-3"> <a href="">Авторы</a>
                    </div>
                    <p class="d-flex align-items-center m-2"><img src="/img/sign_out.svg" alt="sign-out"><a
                            href="">Выйти из аккаунта</a>
                    </p>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
