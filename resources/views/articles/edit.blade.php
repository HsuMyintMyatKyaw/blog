@extends('layouts.app')
@section('content')
<div class="container">
<form method="post">
@csrf
<div class="form-group">
<label>Title</label>
<input type="text" name="title" value="{{ $article['title'] }}" class="form-control">
</div>
<div class="form-group">
<label>Body</label>
<textarea name="body"  class="form-control" >{{ $article['body'] }} </textarea>
</div>
<div class="form-group">
<label>Category</label>
<select class="form-control" name="category_id">
@foreach($category as $categories)
<option value="{{ $categories['id'] }}">
{{ $categories['name'] }}
</option>
@endforeach
</select>
</div>
<input type="submit" value="Edit Article"
class="btn btn-primary">
</form>
</div>
@endsection