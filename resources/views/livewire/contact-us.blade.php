<div>
    @if($pages->isNotEmpty())
    @foreach ($pages as $page)
    <div>
        <h1>{{ $page->title }}</h1>
        <x-flexible-hero :page="$page" />
        <div class="prose content">
            {{-- Check if content_blocks is an array --}}
            @if(is_array($page->content_blocks))
            {{-- Loop through content_blocks for this page --}}
            @foreach ($page->content_blocks as $block)
            {{-- Check if $block is an array and has 'content' key --}}
            @if(is_array($block) && isset($block['content']))
            {{-- Display content block --}}
            {{ $block['content'] }}
            @endif
            @endforeach
            @endif
        </div>
    </div>
    @endforeach
    @endif
</div>
