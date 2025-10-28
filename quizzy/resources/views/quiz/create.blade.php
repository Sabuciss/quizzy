<x-layout>
    <div class="container navbar-container scroll">
        <div class="create-box">

            <h1>Pievienot jautājumu</h1>
            @if(session('status'))
                <script>
                    alert("{{ session('status') }}");
                </script>
            @endif

            @if($errors->any())
                <script>
                    alert("Neizdevās pievienot jautājumu. Lūdzu pārbaudiet ievades datus.");
                </script>
            @endif
            <form action="{{ route('questions.store') }}" method="POST">
                @csrf

                <label for="topic_id">Tēma</label>
                <select name="topic_id" id="topic_id">
                    @foreach($topics as $topic)
                        <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                    @endforeach
                </select>

                <label for="question">Jautājums</label>
                <textarea name="question" id="question" rows="4">{{ old('question') }}</textarea>

                <h3>Atbildes varianti:</h3>
                <label for="correct_answer">Pareizā atbilde</label>
                <input type="text" name="correct_answer" id="correct_answer" value="{{ old('correct_answer') }}" required />

                <label for="wrong1">Nepareizā atbilde 1</label>
                <input type="text" name="wrong1" id="wrong1" value="{{ old('wrong1') }}" required />

                <label for="wrong2">Nepareizā atbilde 2</label>
                <input type="text" name="wrong2" id="wrong2" value="{{ old('wrong2') }}" />

                <label for="wrong3">Nepareizā atbilde 3</label>
                <input type="text" name="wrong3" id="wrong3" value="{{ old('wrong3') }}" />

                <label for="wrong4">Nepareizā atbilde 4</label>
                <input type="text" name="wrong4" id="wrong4" value="{{ old('wrong4') }}" />

                <button type="submit">Saglabāt</button>
            </form>
        </div>

        <div class="create-box">
            
            <form method="POST" action="{{ route('quiz.storeTopic') }}">
                @csrf

                <label for="new_topic_id">Tēma</label>
                <input type="text" name="new_topic_name" id="new_topic_name" placeholder="Tēmas nosaukums" required />
                
                <button type="submit">Saglabāt</button>
            </form>
        </div>
        
    </div>
</x-layout>
