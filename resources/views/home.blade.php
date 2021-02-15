@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                @include('errors')
                <form action="{{route('factory')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="count"><h4>Введите количество записей для посева в базу данных</h4></label>
                        <input  name="quantity" type="text" class="form-control" id="count">

                    </div>

                    <button type="submit" class="btn btn-primary">Сгенерировать</button>
                    <button onclick="location.href='{{route('refresh')}}'" type="button" class="btn btn-success ml-5">Удалить все записи</button>
                </form>


                <h1 class="d-block mt-5">Создать Отзыв</h1>
                <form action="{{route('create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Text</label>
                        <textarea name="text" id="exampleInputPassword1" class="form-control" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Опубликовать</button>
                </form>

                <table class="table mt-5 table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Text</th>
                        <th scope="col">Создан</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($guest as $feedback)
                        <tr>


                            <th>{{$feedback->id}}</th>

                            <td>{{$feedback->email}}</td>
                            <td>{{$feedback->text}}</td>
                            <td>{{$feedback->created_at->diffForHumans()}}</td>
                            <td>
                            </td>




                        </tr>
                    @endforeach

                    </tbody>

                </table>
                {{$guest->links()}}

            </div>
        </div>
    </div>
@endsection
