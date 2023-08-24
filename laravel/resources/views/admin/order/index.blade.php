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
                    <h3 class="text-xl font-bold mb-3">訂單列表</h3>
                    <table class="w-full border">
                        <tr>
                            <th class="border border-zinc-400 p-4">訂單編號</th>
                            <th class="border border-zinc-400 p-4">訂購人</th>
                            <th class="border border-zinc-400 p-4">建立時間</th>
                            <th class="border border-zinc-400 p-4">動作</th>
                        </tr>
                        @foreach($orders as $order)
                        <tr>
                            <td class="border border-zinc-400 p-4">{{$order->orderNo}}</td>
                            <td class="border border-zinc-400 p-4">{{$order->user->email}}</td>
                            <td class="border border-zinc-400 p-4">{{$order->created_at}}</td>
                            <td class="border border-zinc-400 p-4">
                                <form action="">
                                    <input type="submit" value="移除" class="px-3 py-1 bg-red-600 text-white text-sm rounded">
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
