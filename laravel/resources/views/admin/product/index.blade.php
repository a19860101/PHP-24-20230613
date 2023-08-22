<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('商品管理') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-3">商品列表</h3>
                    <table class="w-full border">
                        <tr>
                            <th class="border border-zinc-400 p-4">#</th>
                            <th class="border border-zinc-400 p-4">商品標題</th>
                            <th class="border border-zinc-400 p-4">價格</th>
                            <th class="border border-zinc-400 p-4">上架時間</th>
                            <th class="border border-zinc-400 p-4">動作</th>
                        </tr>
                       
                    </table>
                </div>
            </div>
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
                       
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
