@extends('layouts.app')

@section('content')
<div>
    <table class="table table-striped table-bordered border-primary">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Entry</th>
            <th scope="col">Emotions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($journals as $journal)
                <tr>
                    <td>{{ $journal->created_at}}</td>
                    <td>{{ $journal->entry}}</td>
                    <td><img src="{{ asset($journal->emotion) }}" class="imageEmotion" alt=""></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

<div class="diaryCard">
  <div>
    <p class="cardEntry">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat nulla libero soluta fugiat excepturi! Hic veniam ab laudantium amet! Ullam deleniti totam ex optio quidem ea quaerat minima magnam eligendi?</p>
    <div>
      <p>Created at:</p>
      <div class="dateTime"></div>
    </div>
  </div>

  <img class="emotionsImg" src="{{ asset('css/joy.png')}}" alt="">
</div>

@endsection