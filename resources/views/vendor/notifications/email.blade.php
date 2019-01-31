@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# @lang('Whoops!')
@else
    こんにちは！
@endif
@endif
 
{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}
 
@endforeach
 
{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset
 
{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}
 
@endforeach
 
{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
よろしくお願い致します
@endif
 
{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
@lang(
    "認証ボタンより遷移できない場合、下記URLから認証をお試しください".
    '[:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl
    ]
)
@endcomponent
@endisset
@endcomponent