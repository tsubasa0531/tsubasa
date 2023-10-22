<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <X-app-layout>
        <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    </x-slot>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach ($questions as $question)
                 <div>{{ $question['title'] }}</div>
            <div class='post'>
                {{ Auth::user()->name }}
               
                <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                <a href="">{{ $post->category->name }}</a>
                <p class='body'>{{ $post->body }}</p>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <a href="https://teratail.com/questions/{{ $question/{{ $question['id'] }}">
                    {{ $question['title'] }}
                </a>
                
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
            </div>
            @endforeach
        </div>
        <div class='Pafinate'>{{$posts->links()}}</div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElemenById('form_${id}').submit();
                }
            }
        </script>
        
        
     </body>
    </X-app-layout>
</html>
