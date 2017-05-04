@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa Post</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Tên</td>
                <td>Người viết</td>
                <td>Ngày</td>
            </tr>
            @php $posts = $data['term']->post; @endphp
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->post_name }}</td>
                <td>{{ $post->user->user_name }}</td>
                <td>{{ date('d.m',strtotime($post->created_at)) }}</td>
            </tr>
            @endforeach
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-leaf"></span>  Xóa Post</button>
        </div>
    </div>
</form>
@endsection('content')
