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
@endsection