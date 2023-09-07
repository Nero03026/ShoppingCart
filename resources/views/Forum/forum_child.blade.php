@if ($children->count() > 0)
<ul class="pl-3">
    @foreach ($children as $child)
    <li class="w-[100%] flex justify-between">
        <div class="flex flex-col justify-center py-1 px-3">
            {{ $child->forum->content }}
        </div>
        <a class="min-w-[60px] py-1 px-3 border-2 border-solid rounded-lg text-rose-50 bg-rose-600"
            href="{{ route('forum.destroy', $child->id) }}">删除</a>
    </li>
    <li class="mb-3">
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="flex gap-[10px]">
                <input class="w-[100%] px-4 py-2 border-2 border-solid rounded-lg" type="text" name="content"
                    placeholder="回覆留言">
                <input type="hidden" name="target" value="{{ $child->id }}">
                <button class="min-w-[60px] py-1 px-3 border-2 border-solid rounded-lg text-rose-50 bg-rose-600"
                    type="submit">回覆</button>
            </div>
        </form>
    </li>
    <li>
        @include('Forum.forum_child', ['children' => $child->children])
    </li>
    @endforeach
</ul>
@endif
