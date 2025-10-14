<x-layout>
        <table>
            <tr>
                <th>Vieta</th>
                <th>Lietotājs</th>
                <th>Punktiiiiiiiiiiiiiiiiiii</th>
            </tr>
            @foreach($highscores as $i => $res)
                <tr @if($res->user_id == auth()->id()) style="background: #d2f6c5;" @endif>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $res->user->username ?? 'Anonīms' }}</td>
                    <td>{{ $res->score }}</td>
                </tr>
            @endforeach
        </table>
        @if($userScore)
            <div style="margin-top: 20px;">
                <strong>Tavs rezultāts:</strong> {{ $userScore->score }}<br>
                <strong>Tava vieta:</strong> {{ $userRank }}
            </div>
        @endif

</x-layout>