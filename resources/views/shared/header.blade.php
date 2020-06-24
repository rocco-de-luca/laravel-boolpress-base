<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara Blog</title>
</head>
<body>
   <header>
       <nav class="navbar">
           <h2 class="navbar-brand">Lara Blog</h2>
           <ul>
               <li><a href="{{route('home')}}">Home</a></li>
               <li><a href="{{route('users.index')}}">Users</a></li>
               <li><a href="{{route('posts.index')}}">Archive</a></li>
           </ul>
       </nav>
   </header>