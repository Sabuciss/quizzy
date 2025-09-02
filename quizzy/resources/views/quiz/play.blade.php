@extends('layouts.app')

@section('content')
<div class="quiz-box">
  <h2>Tests</h2>
  <div class="progress">
    <div id="progressBar" style="height:20px; background:#4caf50; width:0%"></div>
  </div>

  <div id="quizArea">
    @foreach($questions as $i => $q)
      <div class="question" style="{{ $i === 0 ? '' : 'display:none;' }}">
        <h3>{{ $q->question }}</h3>
        @php
          $answers = [$q->correct_answer, $q->wrong1, $q->wrong2, $q->wrong3];
          shuffle($answers);
        @endphp
        @foreach($answers as $ans)
          <button onclick="nextQuestion({{ $i }})">{{ $ans }}</button><br>
        @endforeach
      </div>
    @endforeach
  </div>
</div>

<script>
  let total = {{ count($questions) }};
  let current = 0;

  function nextQuestion(index) {
    document.querySelectorAll('.question')[index].style.display = 'none';
    current++;
    if (current < total) {
      document.querySelectorAll('.question')[current].style.display = 'block';
    } else {
      alert("Tests pabeigts!");
    }
    document.getElementById("progressBar").style.width = (current / total * 100) + "%";
  }
</script>
@endsection
