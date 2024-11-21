@extends('layouts.app')

@section('content')
<div>
  @foreach($journals as $journal)
    <a href="" class="diaryCard">
      <div>
        <p class="cardEntry">{{ $journal->entry}}</p>
        <div>
          <p>Created at:</p>
          <div class="dateTime">{{ $journal->created_at}}</div>
        </div>
        <div>
          <p>Updated at:</p>
          <div class="dateTime">{{ $journal->updated_at}}</div>
        </div>
      </div>
    
      <img class="emotionsImg" src="{{ asset($journal->emotion) }}" alt="Inside Out emotion">
    </a>
  @endforeach
</div>

{{-- <a href="" class="diaryCard">
  <div>
    <p class="cardEntry">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat nulla libero soluta fugiat excepturi! Hic veniam ab laudantium amet! Ullam deleniti totam ex optio quidem ea quaerat minima magnam eligendi?</p>
    <div>
      <p>Created at:</p>
      <div class="dateTime"></div>
    </div>
  </div>

  <img class="emotionsImg" src="https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/envy1.png" alt="">
</a> --}}


@endsection