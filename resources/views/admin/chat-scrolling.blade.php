@foreach ($chats as $chat)
    <li class="clearfix">
        <div class="message-data {{ $chat->status == 'admin' ? 'text-right' : null }}">
            <span class="message-data-time">{{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</span>
        </div>
        <div class="message other-message {{ $chat->status == 'admin' ? 'float-right' : null }}">
            {{ $chat->message }}
        </div>
    </li>
@endforeach
