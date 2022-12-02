<h1>建立表單頁面</h1>

{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

{!! Form::label('subject','標題', ) !!}
{!! Form::text('subject', null,['class'=>'myclass','style'=>'color:green']) !!};<br>










{!! Form::close() !!}


