@extends('layouts.app')

@section('title')
    Edit Post
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/posts/{{$post->id}}" method="POST">
@csrf
@method('PUT')
  <div class="form-group mb-3">
    <label for="post-title">Title</label>
    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="post-title" placeholder="Post Title...">
  </div>
  <div class="form-group mb-3">
    <label for="post-content">Content</label>
    <textarea class="form-control" name="content" id="post-content" rows="3" placeholder="Post Content...">{{$post->content}}</textarea>
  </div>
  <div class="form-group mb-4">
    <label for="post-author">Author</label>
    <select name="author_id" class="form-control" id="post-author">
      @foreach ($users as $user)
      <option value="{{$user->id}}" {{$post->user_id === $user->id ? 'selected' : ''}}>
        {{$user->name}}
      </option>
      @endforeach
    </select>
  </div>
  
  <x-button type="submit" >Edit</x-button>
</form>
@endsection