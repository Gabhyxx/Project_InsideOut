@extends('layouts.app')

@section('content')
    {{-- <div class="details" id="cardShow">
        <img src="" alt="{{ $journal->emotion }}">
        <h4>{{ $journal->created_at }}</h4>
        <p>{{ $journal->entry }}</p>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
    </div> --}}

    <div class="diaryCard">
        <div class="entryAndDate">
          <p class="cardEntry">{{ $journal->entry}}</p>
          <div class="bothDateTime">
            <div>
              <p>Created at:</p>
              <div class="dateTime">{{ $journal->created_at}}</div>
            </div>
            <div>
              <p>Updated at:</p>
              <div class="dateTime">{{ $journal->updated_at}}</div>
            </div>
          </div>
        </div>
      
        <img class="emotionsImg" src="{{ asset($journal->emotion) }}" alt="Inside Out emotion">
    </div>
@endsection