<div class="col-md-4 col-12 mb-4">
  <div class="card">
    @isset ($post->image)
    <img src="{{$post->image}}" class="card-img-top cardImage" alt="...">
    @else
    <img src="{{asset('storage/images/neko.jpeg')}}" class="card-img-top cardImage" alt="...">
    @endisset
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{\Illuminate\Support\Str::limit($post->description, 60, '...')}}</p>
      @include('layouts.userIcon', ['record' => $post->user])
      <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-primary btn-rounded showBtn text-lowercase" role="button">詳細を見る</a>
    </div>
  </div>
</div>
