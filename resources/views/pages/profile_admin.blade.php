@include('head')

<div class="container">
    <div class="row">
        <br>

        <div class="col-md-5">

            <div class="panel panel_news">
                <div class="panel-body label_for_news">

                    <i class="glyphicon glyphicon-user">
                    </i>

                    <span> Админ <small style="color:grey;font-size:20px;">- Всемогущий</small> </span>

                    <hr style="border:2px solid #c6b5bf">
                    <div class="inf1">

                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-4 col-lg-4 ">
            <div class="panel panel_news">
                <div class="panel-body">

                    <div class="label_for_news"> Настройки</div>

                    <hr style="border:2px solid #c6b5bf">
                    Новости
                    <div class="badge" style="background-color:#717b8e;">{{$news}}</div>
                    <br>
                    <a href="/admin/create/news">
                        <button type="submit" class="btn  btn3">Добавить</button>
                    </a>
                    <a href="/admin/edit/news">
                        <button type="submit" class="btn  btn3">Редактировать</button>
                    </a>
                    <a href="/admin/delete/news">
                        <button type="submit" class="btn  btn3">Удалить</button>
                    </a>
                    <hr>
                    Секции
                    <div class="badge" style="background-color:#717b8e;">{{$sections}}</div>
                    <br>
                    <a href="/admin/create/section">
                        <button type="submit" class="btn  btn3">Добавить</button>
                    </a>
                    <a href="/admin/edit/section">
                        <button type="submit" class="btn  btn3">Редактировать</button>
                    </a>
                    <a href="/admin/delete/section">
                        <button type="submit" class="btn  btn3">Удалить</button>
                    </a>
                    <hr>
                    Тренера
                    <div class="badge" style="background-color:#717b8e;">{{$trainers}}</div>
                    <br>
                    <a href="/admin/create/trainer">
                        <button type="submit" class="btn  btn3">Добавить</button>
                    </a>
                    <a href="/admin/create/trainer">
                        <button type="submit" class="btn  btn3">Редактировать</button>
                    </a>
                    <a href="/admin/delete/trainer">
                        <button type="submit" class="btn  btn3">Удалить</button>
                    </a>


                </div>
            </div>
        </div>
    </div>
</div>
@include('footer');



