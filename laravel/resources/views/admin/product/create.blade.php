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
                    <h3 class="text-xl font-bold mb-3">新增商品</h3>
                    <form action="{{route('product.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">商品名稱</label>
                            <input type="text" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="">商品敘述</label>
                            <textarea name="desc" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">圖片</label>
                            <input type="file" name="cover">
                        </div>
                        <div class="mb-3">
                            <label for="">售價</label>
                            <input type="text" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="">特價</label>
                            <input type="text" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="">上架時間</label>
                            <input type="date" name="publish_at">
                        </div>
                        <div class="mb-3">
                            <label for="">下架時間</label>
                            <input type="date" name="unpublish_at">
                        </div>
                        <div class="mb-3">
                            <label for="">上架</label>
                            <select name="published" id="">
                                <option value="0" selected>下架</option>
                                <option value="1">上架</option>
                            </select>
                        </div>
                        <input type="submit" value="新增商品" class="inline-block px-3 py-1 bg-sky-400 text-white rounded">
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
