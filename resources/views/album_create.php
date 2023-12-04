<h2 class="personal-info-title">Добавление альбома</h2>
<div class="bg-personal-area">
    <div class="bg-personal-area-center">
        <div class="bg-personal-area-left-img">

        </div>
        <div class="albun-create-up-input">
            <label class="personal_form_label" for="firstname">Название</label>
            <input class="personal_form_input" id="firstname" type="text">
        </div>
    </div>
</div>
<form action="" method="POST" enctype="multipart/form-data">
<div class="row row-cols-1 row-cols-md-1 row-cols-xl-2 g-3 personal-bottom-area">
<div class="col">
    <label id="label-profile-photo-cover" class="personal_form_label" for="imageInput">Обложка</label>
    <label id="label-profile-photo-cover" for="imageInput" class="input_file-button">
        <input class="input_file" id="imageInput" name="cover" type="file" accept="image/*">
        <img src="" alt="Preview" id="imagePreview" style="max-width: 300px; max-height: 300px;">
        <span>Выберите файл</span>
    </label>
</div>
<div class="col">
    <label id="label-profile-photo-tracks" class="personal_form_label" for="input_tracks">Треки</label>
    <label id="label-profile-photo-tracks" for="input_tracks" class="input_file-button">
        <input class="input_file" id="input_tracks" name="tracks" type="file" multiple>
        <span>Выберите файлы</span>
    </label>
</div>
</div>
<div class="d-flex justify-content-center mt-4">
    <button class="button-form">Добавить</button>
</div>
</form>
