<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumProcess;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forumProcess = ForumProcess::with('children', 'content')->whereNull('target')->get() ?? [];

        // $forumProcessData = $this->getCategoryData($forumProcess);
        return view('Forum.index', compact('forumProcess'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $forum = Forum::create([
            'content' => $request->content,
        ]);
        ForumProcess::create([
            'target' => $request->target,
            'forum_id' => $forum->id,
        ]);

        return redirect(route('forum.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $forumProcess = ForumProcess::find($id);
        $forum = Forum::find($forumProcess->forum_id);
        $forum->update([
            'content' => $request->content,
        ]);
        return redirect(route('forum.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->delCategoryData($id);
        return redirect(route('forum.index'));
    }

    private function delCategoryData($item)
    {
        // 獲取主表記錄
        $post = ForumProcess::findOrFail($item);

        // 遞迴刪除相關聯的 comments 記錄
        foreach ($post->children as $children) {
            $this->delCategoryData($children->id);
        }
        $post->content->delete();
        $post->delete();
    }

    public function getCategoryData($item)
    {
        $data = [
            'id' => $item->id,
            'content' => $item->content,
            'children' => [],
        ];

        foreach ($item->children as $chilrditem) {
            $data['children'][] = $this->getCategoryData($chilrditem);
        }

        return $data;
    }
}
