@if ($children->count() > 0)
<ul class="pl-3">
    @foreach ($children as $child)
    <li class="w-[100%] flex justify-between">
        <div class="flex flex-col justify-center py-1 px-3 me-auto">
            {{ $child->content->content }}
        </div>
        <form class="flex item-center" action="{{route('forum.update', $child->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="content">
            <button class="min-w-[60px] py-1 px-3 border-2 border-solid rounded-lg text-rose-50 bg-rose-600">編輯</button>
        </form>
        <form class="flex item-center" action="{{ route('forum.destroy', $child->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="min-w-[60px] py-1 px-3 border-2 border-solid rounded-lg text-rose-50 bg-rose-600">删除</button>
        </form>
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
