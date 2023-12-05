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


    <div class="container mt-5">
        <h1 class="text-center text-white">Добро пожаловать в админ панель NAME</h1>
        <div class="d-flex mt-5">
            <div class="menu text-white d-flex flex-column ">
                <p class=" d-flex align-items-center m-2"><img src="/img/Chat_plus_fill.svg" alt="chat">Заявки
                    "Стать автором"
                </p>
                <div class="umenu d-flex flex-column ">
                    <div class="hr1"></div>
                    <a href="/admin/OrdersNew">
                        <p class="authors ordersNew d-flex align-items-center p-2"><img src="/img/new.svg"
                                alt="new">Новые
                            заявки</p>
                    </a>
                    <a href="/admin/OrdersDeny">
                        <p class="ordersDeny d-flex align-items-center p-2"><img src="/img/deny.svg"
                                alt="deny">Отклонённые заявки</p>
                    </a>
                    <a href="/admin/OrdersAccept">
                        <p class="ordersAccept d-flex align-items-center p-2"><img src="/img/accept.svg"
                                alt="accept">Одобренные заявки</p>
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <a href="/admin">
                        <div class=" d-flex align-items-center">
                            <img src="/img/men.svg" alt="authors" class="mx-2 px-1">
                            Авторы
                        </div>
                    </a>
                    <p class="d-flex align-items-center p-2"><img src="/img/sign_out.svg" alt="sign-out"><a
                            href="/">Выйти из аккаунта</a>
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($artist as $artists)
                            <tr>
                                <th>{{ $artists->id }}</th>
                                <td>{{ $artists->user->name }} {{ $artists->user->surname }}</td>
                                <td>{{ $artists->artist_name }}</td>
                                <td>{{ $artists->label_email }}</td>
                                <td><a href="/playlist">Ссылка</a></td>
                                <td>
                                    <a href="/admin/OrdersNew/{{ $artists->id }}/accept"
                                        class="accept mx-1">Принять</a>
                                    <a href="/admin/OrdersNew/{{ $artists->id }}/denay" class="deny mx-1">Отклонить</a>
                                </td>
                            </tr>
                        @empty
                            <td>
                                <h1>Пусто</h1>
                            </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
