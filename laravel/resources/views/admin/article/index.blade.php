<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('文章管理') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-3">文章列表</h3>
                    <table class="w-full border">
                        <tr>
                            <th class="border border-zinc-400 p-4">#</th>
                            <th class="border border-zinc-400 p-4">文章標題</th>
                            <th class="border border-zinc-400 p-4">建立時間</th>
                            <th class="border border-zinc-400 p-4">最後更新時間</th>
                            <th class="border border-zinc-400 p-4">動作</th>
                        </tr>
                        @foreach($articles as $article)
                        <tr>
                            <td class="border border-zinc-400 p-4">{{$article->id}}</td>
                            <td class="border border-zinc-400 p-4">{{$article->title}}</td>
                            <td class="border border-zinc-400 p-4">{{$article->created_at}}</td>
                            <td class="border border-zinc-400 p-4">{{$article->updated_at}}</td>
                            <td class="border border-zinc-400 p-4 space-y-3">
                                <a href="#" class="inline-block px-3 py-1 bg-blue-400 rounded">詳細</a>
                                <form action="{{route('admin.article.delete',$article->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="刪除"  class="inline-block px-3 py-1 bg-red-600 text-white rounded">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-3">已刪除</h3>
                    <table class="w-full border">
                        <tr>
                            <th class="border border-zinc-400 p-4">#</th>
                            <th class="border border-zinc-400 p-4">文章標題</th>
                            <th class="border border-zinc-400 p-4">建立時間</th>
                            <th class="border border-zinc-400 p-4">最後更新時間</th>
                            <th class="border border-zinc-400 p-4">動作</th>
                        </tr>
                        @foreach($articles_trashed as $article)
                        <tr>
                            <td class="border border-zinc-400 p-4">{{$article->id}}</td>
                            <td class="border border-zinc-400 p-4">{{$article->title}}</td>
                            <td class="border border-zinc-400 p-4">{{$article->created_at}}</td>
                            <td class="border border-zinc-400 p-4">{{$article->updated_at}}</td>
                            <td class="border border-zinc-400 p-4 space-y-3">
                                <a href="{{route('admin.article.restore',$article->id)}}" class="inline-block px-3 py-1 bg-lime-400 rounded">還原</a>
                                <form action="{{route('admin.article.forceDelete',$article->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value='永久刪除' class="inline-block px-3 py-1 bg-red-600 text-white rounded">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
