<x-layout>

<div class="container">
  <div class="play-box">
    <h2>"{{ \App\Models\Topic::find($topic_id)->name ?? ''}}" Tests</h2>

    <!-- question counter -->
    <div id="questionCounter">
      Question 1 out of {{ count($questions) }}
    </div>

    <!-- progress bar -->
    <div class="progress">
      <div id="progressBar"></div>
    </div>

    <div id="quizArea">
      @foreach($questions as $i => $question)
        <div class="question" style="display: {{ $i === 0 ? 'block' : 'none' }};">
          <h3>{{ $question->question }}</h3>
          @php
            // sajauc atbilžu kārtību katrā spēles reizē
            $answers = array_filter([$question->correct_answer, $question->wrong1, $question->wrong2, $question->wrong3]);
            shuffle($answers);
          @endphp
          @foreach($answers as $answer)
            <button onclick="nextQuestion({{ $i }}, '{{ addslashes($question->correct_answer) }}', '{{ addslashes($answer) }}')">
              {{ $answer }}
            </button><br>
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
</div>

<script>
  let total = {{ count($questions) }};
  let current = 0;
  let score = 0;

  function nextQuestion(index, correct, chosen) {
    if (chosen === correct) score++;

    current++;

    if (current < total) {
      document.querySelectorAll('.question')[index].style.display = 'none';
      document.querySelectorAll('.question')[current].style.display = 'block';

      // updats question counter
      document.getElementById('questionCounter').textContent = 
        `Question ${current + 1} out of ${total}`;
    } else {
      // redirects uz results lapu
      window.location.href = "/results?score=" + score + "&total=" + total + "&topic_id={{ $topic_id }}";
    }

    // updates progress bar
    document.getElementById("progressBar").style.width = Math.min((current / total) * 100, 100) + "%";
  }
</script>

</x-layout>