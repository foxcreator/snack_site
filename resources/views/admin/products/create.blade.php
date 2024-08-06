@extends('admin.layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление нового товара</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('products.store') }}" method="POST" class="col-md-6" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_id">Категория</label>
                        <select class="form-control select2bs4 @error('category') is-invalid @enderror"
                                id="category_id"
                                name="category_id"
                                style="width: 100%;"
                        >
                            <option value="" selected>------</option>
                            @foreach(\App\Models\Product::CATEGORIES as $key => $category)
                                <option value="{{ $key }}">{{ $category }}</option>
                            @endforeach
                        </select>

                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Наименование</label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               id="name"
                               name="name"
                               value="{{ old('name') }}"
                               placeholder="Введите наименование товара на украинском"
                               required
                        >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Описание UA</label>
                        <textarea id="description"
                                  name="description"
                                  class="form-control @error('description') is-invalid @enderror"
                                  rows="10"
                        >{{ old('description') ? trim(old('description')) : '' }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="text"
                               class="form-control @error('price') is-invalid @enderror"
                               id="price"
                               name="price"
                               value="{{ old('price') }}"
                               placeholder="Введите розничную цену на товар"
                               required
                        >
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">Главное фото товара</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input"
                                       id="thumbnail"
                                       name="thumbnail"
                                       accept="image/jpeg, image/png, image/jpg"
                                >
                                <label class="custom-file-label" for="thumbnail">Выберите файл</label>
                            </div>
                        </div>
                        @error('thumbnail')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div id="thumbnail-preview"></div>

                </div>

                <div class="card-footer d-flex justify-content-between gap-2">
                    <div class="col-md-6">
                        <a href="{{ route('products.index') }}" class="btn btn-dark">Назад</a>
                    </div>
                    <div class="d-flex justify-content-end col-md-6 w-100">
                        <button type="submit" class="btn btn-success w-100">Сохранить</button>
                    </div>
                </div>

            </form>

        </div>
    </section>

    <script>
        document.getElementById('thumbnail').addEventListener('change', function(event) {
            var previewContainer = document.getElementById('thumbnail-preview');
            previewContainer.innerHTML = '';

            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail', 'mb-4');
                previewContainer.appendChild(img);
            };

            reader.readAsDataURL(file);
        });
    </script>
@endsection
