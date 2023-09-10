<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="flex justify-center">
        <div class="w-[100%] max-w-[1200px]">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="flex flex-col lg:flex-row gap-[20px]">
                    <div class="w-[100%] lg:w-[60%]">
                        <div
                            class="w-[100%] p-[24px] grid grid-cols-2 gap-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <div class="col-span-2 font-bold">Product Information</div>
                            <label for="product_name"
                                class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px]">
                                <span>Title</span>
                                <input id="product_name" name="product_name" type="text"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="Product Name" required>
                            </label>
                            <label for="product_category"
                                class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px]">
                                <span>Product Category</span>
                                <input id="product_category" name="product_category" class="h-[34px]" type="text">
                            </label>
                            <label for="product_weight"
                                class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px]">
                                <span>Weight</span>
                                <input id="product_weight" name="product_weight" type="text"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="Weight" value="0" required>
                            </label>
                            <label for="product_units"
                                class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px] mb-[16px]">
                                <span>Units</span>
                                <input id="product_units" name="product_units" class="h-[34px]" type="text">
                            </label>
                            <label for="product_image" class="col-span-2 flex flex-col justify-start gap-[8px]">
                                <span>Product Images</span>
                                <input id="product_image" name="product_image" type="file" hidden>
                                <div
                                    class="w-[100%] h-[150px] bg-slate-300 flex justify-center items-center cursor-pointer">
                                    Drop files here to upload</div>
                            </label>
                            <label for="product_descriptions" class="col-span-2 flex flex-col justify-start gap-[8px]">
                                <span>Product Descriptions</span>
                                <input id="product_descriptions" name="product_descriptions" type="text" hidden>
                                <div>此功能未開放，近請期待。</div>
                            </label>
                        </div>
                    </div>

                    <div class="w-[100%] lg:w-[40%] flex flex-col gap-y-[16px] ">
                        <div
                            class="w-[100%] p-[24px] flex flex-col gap-y-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <label for="product_stock" class="w-[100%] flex items-center gap-[8px]">
                                <input id="product_stock" name="product_stock" type="checkbox"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="Enter Product Title">
                                <span>In Stock</span>
                            </label>
                            <label for="product_code" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Product Code</span>
                                <input id="product_code" name="product_code" type="text"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="Enter Product Title" required>
                            </label>
                            <label for="product_sku" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Product SKU</span>
                                <input id="product_sku" name="product_sku" type="text"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="Enter Product Title" required>
                            </label>
                            <div class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Status</span>
                                <div class="flex gap-[8px]">
                                    <label class="flex gap-[8px] cursor-pointer" for="product_status_act">
                                        <input id="product_status_act" name="product_status" type="radio" value="1"
                                            checked>
                                        <span>Active</span>
                                    </label>
                                    <label class="flex gap-[8px] cursor-pointer" for="product_status_unact">
                                        <input id="product_status_unact" name="product_status" type="radio" value="2">
                                        <span>Disabled</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[100%] p-[24px] flex flex-col gap-y-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <div class="w-[100%] font-bold">Product Information</div>
                            <label for="price_regular" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Regular Price</span>
                                <input id="price_regular" name="price_regular" type="text"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="$0.00" required>
                            </label>
                            <label for="price_sale" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Sale Price</span>
                                <input id="price_sale" name="price_sale" type="text" class="h-[34px] px-[10px] py-[5px]"
                                    placeholder="$0.00">
                            </label>
                        </div>
                        <div
                            class="w-[100%] p-[24px] flex flex-col gap-y-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <div class="w-[100%] font-bold">Meta Data</div>
                            <label for="meta_title" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Meta Title</span>
                                <input id="meta_title" name="meta_title" type="text" class="h-[34px] px-[10px] py-[5px]"
                                    placeholder="Title" required>
                            </label>
                            <label for="meta_description" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Meta Description</span>
                                <textarea id="meta_description" name="meta_description"
                                    class="h-[34px] px-[10px] py-[5px]" placeholder="Meta Description"></textarea>
                            </label>
                        </div>
                        <button class="w-[100%] p-[10px] bg-lime-600 text-blue-50 hover:bg-green-700 rounded">create
                            Product</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>


</html>
