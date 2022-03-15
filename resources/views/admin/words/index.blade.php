<h1>Words</h1>

@foreach ($words as $word)

    <p>{{$word->description}} - {{$word->meaning}} - {{$word->note}} - {{$word->language_id}} - {{$word->sentence_id}}</p>

@endforeach
