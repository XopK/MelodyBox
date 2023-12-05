<div class="modal fade modal-sm-6" id="Artist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="authorization">

                    <p class="text-center fs-1" style="">Анкета автора</p>

                    <form action="/application" method="POST" class="fs-4">
                        @csrf
                        <label for="login-form" class="form-label">Псевдоним</label>
                        <input type="text" name="artist_name" class="form-text mt-1" id="login-form">

                        <label for="email-form" class="form-label">Электронная почта</label>
                        <input type="email" name="label_email" class="form-text mt-1" id="email-form">

                        <button type="submit" class="button-form mt-3">Отправить</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
