@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')

    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
        <header>
            <h1>
              Post your offer:
            </h1>
        </header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                <textarea class="form-control" name="body" id="new-post" rows="6" placeholder="Mention Your Offer"></textarea>
                </div>
                 <button type="submit" class="btn btn-primary">Submit offer</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
        <hr>
        <br>
    </section>

    <section class="row posts">

        <div class="col-md-6 col-md-offset-3">
            <header>
                <h2>
                    Latest offers:
                </h2>
            </header>
            @foreach($posts as $post)
            <article class="post" data-postid="{{$post->id}}">
                <p1><b>{{ $post-> body }}</b></p1><hr>
            <div class="info">
                Posted by {{$post->user->category}}:<u> {{$post->user->name}}</u> on {{$post->created_at->format('d/m/Y')}}. Call: {{$post->user->phone}}
            </div>
                <div class="interaction">
                    @if(Auth::user()==$post->user)
                        <a href="#" class="edit">Edit</a> |
                    <a href="{{ route('post.delete', ['post_id'=> $post->id]) }}">Delete</a>
                    @endif
                </div>
            </article>
            @endforeach
        </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<script>
    var token = '{{Session::token()}}';
    var url = '{{route('edit')}}';
</script>
@endsection