@foreach ($chats as $chat)
    <li class="clearfix">
        <div class="message-data {{ $chat->status == 'admin' ? 'text-right' : null }}">
            @php
                $time = Carbon\Carbon::parse($chat->created_at)->diffForHumans();
            @endphp
            <span class="message-data-time">{{ strpos($time, 'detik yang lalu') !== false ? 'Baru Saja' : $time }}</span>
        </div>
        <div class="message other-message {{ $chat->status == 'admin' ? 'float-right' : null }}">
            @if (empty($chat->image))
                {{ $chat->message }}
            @elseif (empty($chat->message))
                <img src="{{ asset($chat->image) }}" width="500">
            @else
                <img src="{{ asset($chat->image) }}" width="500">
                <hr>
                {{ $chat->message }}
            @endif
        </div>
    </li>
@endforeach
