@foreach (session('flash_notification', collect())->toArray() as $message)
@if ($message['overlay'])
@include('flash::modal', [
'modalClass' => 'flash-modal',
'title' => $message['title'],
'body' => $message['message']
])
@else
<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
    class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
    @if ($message['important'])
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @endif

    <p>{!! $message['message'] !!}</p>
</div>
@endif
@endforeach

{{ session()->forget('flash_notification') }}