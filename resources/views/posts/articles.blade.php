<h1>建立表單頁面</h1>

{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

{!! Form::label('title','標題', ) !!}
{!! Form::text('title', null,['class'=>'myclass','style'=>'color:green']) !!};<br>

{!! Form::label('content','內文', ) !!}<br>
{!! Form::textarea('content',null,['cols'=>16,'rows'=>9]) !!}<br>

{!! Form::hidden('mode', 100) !!}

{!! Form::label('status','標題', ) !!}
開啟{!! Form::radio('status', 1, true, ) !!}
關閉{!! Form::radio('status', 0, false, ) !!}<br>


你的嗜好?
{!! Form::label('interests[]','打球', ) !!}
{!! Form::checkbox('interests[]', 'playball', false) !!}
{!! Form::label('interests[]','電影', ) !!}
{!! Form::checkbox('interests[]', 'movie', false) !!}
{!! Form::label('interests[]','電玩', ) !!}
{!! Form::checkbox('interests[]', 'game', false) !!}
{!! Form::select($mode,$modes,['placeholder' => '請選擇商品模式']) !!}<br><br>


{!! Form::label('email','信箱',[] ) !!}<br><br>
{!! Form::email('email',null) !!}

{!! Form::label('password','信箱',[] ) !!}<br><br>
{!! Form::password('password') !!}<br><br>

{!! Form::label('data','何時上架',[] ) !!}<br><br>
{!! Form::date('data', null) !!}<br><br>

{!! Form::label('age','年紀',[] ) !!}<br><br>
{!! Form::number('age', null, ['min'=>18 , 'max'=>80]) !!}<br><br>
{!! Form::file('pic') !!}<br><br>

{!! Form::submit('送出' ) !!}
{!! Form::reset('重置') !!}






{{--
{!! Form::label('enabled', '是否上架', []) !!}
    上架{!! Form::radio('enabled', 1, true, []) !!}
    下架{!! Form::radio('enabled', 0, false, []) !!}<br><br> --}}


{!! Form::close() !!}

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif


