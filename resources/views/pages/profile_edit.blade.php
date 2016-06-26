@foreach( $vot as $vot2)
@endforeach

@include('head')


<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="Registration1">
            <label for="exampleInputFile">
                Выберите катинку
            </label>
            <input type="file" id="exampleInputFile" name="filename">
            <br>
            <button type="submit" class="btn btn-sm" name="load">
                Загрузить
            </button>
        </div>
    </form>
</div>

@include('footer')


