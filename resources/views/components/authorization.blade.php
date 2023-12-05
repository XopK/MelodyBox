<div class="modal fade modal-sm-6" id="Authorization" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="authorization">

                    <p class="text-center fs-1">Вход</p>

                    <form action="/login" method="POST" class="fs-4">
                        @csrf
                        <label for="email-form" class="form-label">Электронная почта</label>
                        <input type="email" name="log_email" class="form-text mt-1" id="email-form">

                        <label for="password-form" class="form-label">Пароль</label>
                        <input type="password" name="log_password" class="form-text mt-1" id="password-form">

                        <button type="submit" class="button-form mt-3">Войти</button>
                    </form>

                    <div class="d-flex justify-content-center fs-4 mt-1">Нету аккаунта? <p><a data-bs-toggle="modal" data-bs-target="#Registration">Зарегистрируетесь!</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>