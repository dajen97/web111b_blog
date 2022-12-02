



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Parallax Depth Cards</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700'><link rel="stylesheet" href="dashboard/style.css">


@yield('body')
@section('yidle')

<div></div>
@show

</head>
<body>
<!-- partial:index.partial.html -->
<h1 class="title">佛教</h1>
@yield('title')

<div id="app" class="container">
  <card data-image="https://www.merit-times.com/news_pic/20170515/830214_596170.jpg">
    <h1 slot="header">釋迦牟尼佛</h1>
    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </card>
  <card data-image="https://www.merit-times.com/news_pic/20200721/1417685_1005472.jpg">
    <h1 slot="header">觀音菩薩</h1>
    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </card>
  <card data-image="https://d2onjhd726mt7c.cloudfront.net/images/gallery/AF000582/artworks/3613/20201230174928374_830x600.jpg">
    <h1 slot="header">文殊菩薩</h1>
    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </card>
  <card data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScKOsMf60HVWb73KFrTkvHx0Q5t7hxiIFyKQ&usqp=CAU">
    <h1 slot="header">普賢菩薩</h1>
    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </card>
  <card data-image="https://img.alicdn.com/imgextra/i1/3969960722/TB28xiLwYGYBuNjy0FoXXciBFXa_!!3969960722.jpg">
    <h1 slot="header">地藏王菩薩</h1>
    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </card>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="dashboard/script.js"></script>


{{$global}}



</body>
</html>

