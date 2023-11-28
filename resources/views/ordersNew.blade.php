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
        <div class="d-flex mt-5">
            <div class="menu text-white d-flex flex-column ">
                <p class="d-flex align-items-center mx-2 mt-2"><img src="/img/Chat_plus_fill.svg" alt="chat">Заявки
                    "Стать автором"
                </p>
                <div class="d-flex flex-column mx-2">
                    <div class="hr1"></div>
                    <p class="ordersNew d-flex align-items-center mt-2"><img src="/img/new.svg" alt="new"><a
                            href="">Новые заявки</a></p>
                    <p class="ordersDeny d-flex align-items-center"><img src="/img/deny.svg" alt="deny"><a
                            href="">Отклонённые заявки</a></p>
                    <p class="ordersAccept d-flex align-items-center"><img src="/img/accept.svg" alt="accept"><a
                            href="">Одобренные заявки</a></p>
                </div>
                <div class="d-flex flex-column">
                    <div class="authors d-flex align-items-center">
                        <img src="/img/men.svg" alt="authors" class="mx-2 py-3"> <a href="">Авторы</a>
                    </div>
                    <p class="d-flex align-items-center p-2"><img src="/img/sign_out.svg" alt="sign-out"><a
                            href="">Выйти из аккаунта</a>
                    </p>
                </div>
            </div>
            <div class="ta mx-3">
                <table class="tableorders text-white">
                    <thead>
                        <tr>
                            <th>Новые заявки</th>
                        </tr>
                        <tr>
                            <th>№</th>
                            <th>ФИО</th>
                            <th>Псевдоним</th>
                            <th>Электронная почта</th>
                            <th>Жанр</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Смирнов А.А.</td>
                            <td>Водказавр</td>
                            <td>@LexaKypu2@gmail.com</td>
                            <td>Рок</td>
                            <td>
                                <a href="" class="accept mx-1">Принять</a>
                                <a href="" class="deny mx-1">Отклонить</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
