@extends('layouts.app')

@section('content')

    <div class="detailedCard">
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
    </div>
    <div class="goBackSection">
        <a href="{{ route('home')}}"><button>Go Back</button></a>
    </div>
    
@endsection