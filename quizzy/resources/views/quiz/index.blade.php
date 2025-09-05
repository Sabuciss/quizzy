<x-layout>

<div class="container">
  <div class="quiz-box">
  <h2>Izvēlies testu</h2>
  <form action="{{ route('quiz.start') }}" method="POST">
    @csrf
    <select name="topic_id" required>
      <option value="">-- Izvēlies tematu --</option>
      @foreach($topics as $topic)
        <option value="{{ $topic->id }}">{{ $topic->name }}</option>
      @endforeach
    </select>
    <button type="submit">Start Quiz</button>
  </form>
  </div>
</div>

</x-layout>
