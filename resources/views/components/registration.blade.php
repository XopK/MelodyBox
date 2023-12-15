<div class="modal fade modal-sm-6" id="Registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="authorization">

                    <p class="text-center fs-1" style="">Регистрация</p>

                    <form action="/registration" method="POST" class="fs-4">
                        @csrf
                        <label for="name-form" class="form-label">Имя</label>
                        <input type="text" name="reg_name" class="form-text mt-1" id="name-form">
                        @error('reg_name')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                        <label for="surname-form" class="form-label">Фамилия</label>
                        <input type="text" name="reg_surname" class="form-text mt-1" id="surname-form">
                        @error('reg_surname')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                        <label for="number-form" class="form-label">Номер телефона</label>
                        <input type="text" name="phone_number" class="form-text mt-1" id="number-form">
                        @error('phone_number')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                        <label for="email-form" class="form-label">Электронная почта</label>
                        <input type="email" name="email" class="form-text mt-1" id="email-form">
                        @error('email')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                        <label for="password-form" class="form-label">Пароль</label>
                        <input type="password" name="reg_password" class="form-text mt-1" id="password-form">
                        @error('reg_password')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                        <label for="password-form" class="form-label mt-2">Подтверждение пароля</label>
                        <input type="password" name="reg_confirm_password" class="form-text" id="password-form">
                        @error('reg_confirm_password')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                        <button type="submit" class="button-form mt-3">Создать аккаунт</button>
                    </form>

                    <div class="d-flex justify-content-center fs-4 mt-1">Есть аккаунт? <p><a data-bs-toggle="modal" data-bs-target="#Authorization">Войдите!</a>
                                                @if(session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{session('succes')}}
                        </div>
                        @endif
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
