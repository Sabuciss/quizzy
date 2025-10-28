<x-layout>
    <div class="leaderboard-wrapper">
        <!-- Tēmu filtrs -->
        <div class="filters" style="margin-bottom: 20px; text-align: center;">
            <select id="topic-select" name="topic">
                <option value="all">Visas tēmas</option>
                @foreach($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                @endforeach
            </select>

            <button type="button" class="btn" onclick="filterLeaderboard()">Filtrēt</button>
        </div>

        <table id="leaderboard-table">
            <thead>
                <tr>
                    <th>Vieta</th>
                    <th>Lietotājs</th>
                    <th>Tēma</th>
                    <th>Punkti</th>
                </tr>
            </thead>
            <tbody>
                @foreach($highscores as $i => $res)
                    <tr data-topic="{{ $res->topic->id ?? '' }}">

                        <td>{{ $i + 1 }}</td>
                        <td>{{ $res->user->username ?? 'Anonīms' }}</td>
                        <td>{{ $res->topic->name ?? 'Tests' }}</td>
                        <td>{{ $res->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@if($userResults->count() > 0)
    <h3>Tavi rezultāti</h3>
    <table>
        <thead>
            <tr>
                <th>Tēma</th><th>Punkti</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userResults as $result)
                <tr>
                    <td>{{ $result->topic->name ?? 'Tests' }}</td>
                    <td>{{ $result->score }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif


       @if(isset($userScore) && $userScore)
            <div class="user-score-info" style="margin-top: 20px;">
                <h2>Tavs rezultāts</h2>
                <p><strong>Punkti:</strong> {{ $userScore->score }}</p>
                <p><strong>Vieta:</strong> {{ $userRank }}</p>
            </div>
        @endif
    </div>

    <script>
       function filterLeaderboard() {
    const select = document.getElementById('topic-select');
    const topic = select.value;
    const rows = document.querySelectorAll('#leaderboard-table tbody tr');

    rows.forEach(row => {
        const rowTopic = row.getAttribute('data-topic');
        if(topic === 'all' || rowTopic === topic) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

    </script>
</x-layout>
