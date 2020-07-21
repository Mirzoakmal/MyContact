<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/show.css')}}">
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="{{asset('image/'.$contact->id.'.jpg')}}" alt="{{$contact->fullname}}" style="width:100%">
  <h1>{{ $contact->fullname }}</h1>
  <p class="title">{{$contact->speciality}}</p>
  <p>{{$contact->company}}</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
 </div>
 <p><button onclick='location.href="{{url('/')}}"'>Contact</button></p>
</div>

</body>
</html>
