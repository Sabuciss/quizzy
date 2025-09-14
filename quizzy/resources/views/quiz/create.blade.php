<x-layout>
    <h1>Pievienot jautājumu</h1>

    <form method="POST" action="/create">
        @csrf

        <label for="topic_id">Tēma:</label>
        <select name="topic_id" id="topic_id">
            @foreach($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
            @endforeach
        </select>

        <label for="question">Jautājums:</label>
        <textarea name="question" id="question" rows="4"></textarea>

        <h3>Atbildes varianti:</h3>
        <label for="correct_answer">Pareizā atbilde:</label>
        <input type="text" name="correct_answer" id="correct_answer" required />

        <label for="wrong1">Nepareizā atbilde 1:</label>
        <input type="text" name="wrong1" id="wrong1" required />

        <label for="wrong2">Nepareizā atbilde 2:</label>
        <input type="text" name="wrong2" id="wrong2" required />

        <label for="wrong3">Nepareizā atbilde 3:</label>
        <input type="text" name="wrong3" id="wrong3" required />

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
