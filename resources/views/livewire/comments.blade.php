<div>
    
    <livewire:comment-create :post="$post" />

    @foreach ($comments as $comment)
    {{-- <pre>{{ $comment }}</pre> --}}
        <livewire:comment-item :comment="$comment" :wire:key="'comment-' . $comment->id" />
    @endforeach

</div>
