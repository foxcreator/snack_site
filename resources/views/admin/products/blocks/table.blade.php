<table class="table table-hover text-nowrap">
    <thead>
    <tr>
        <th>Изображение</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Цена</th>
        <th class="text-right">Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td class="table-image" style="max-height: 20px">
                <img style="max-height: 80px" class="img-thumbnail m-height" src="{{ $product->thumbnailUrl }}" alt="">
            </td>
            <td class="custom-text-overflow">{{ $product->name }}</td>
            <td class="custom-text-overflow">{{ $product->description }}</td>
            <td>{{ $product->price }}</td>

            <td class="text-right d-flex justify-content-end">
{{--                <a href="{{ route('products.show', $product) }}" class="btn btn-secondary btn-xs">Информация</a>--}}
                <a href="{{ route('products.edit', $product) }}" class="btn btn-info btn-xs mr-3">Редактировать</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-xs">Удалить</button>

                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
