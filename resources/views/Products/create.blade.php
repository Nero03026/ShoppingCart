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
            <form action="">
                <div class="flex flex-col lg:flex-row gap-[20px]">
                    <div class="w-[100%] lg:w-[60%]">
                        <div
                            class="w-[100%] p-[24px] grid grid-cols-2 gap-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <div class="col-span-2 font-bold">Product Information</div>
                            <label for="" class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px]">
                                <span>Title</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="Product Name"
                                    required>
                            </label>
                            <label for="" class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px]">
                                <span>Product Category</span>
                                <input class="h-[34px]" type="text">
                            </label>
                            <label for="" class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px]">
                                <span>Weight</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="Weight" required>
                            </label>
                            <label for=""
                                class="col-span-2 md:col-span-1 flex flex-col justify-start gap-[8px] mb-[16px]">
                                <span>Units</span>
                                <input class="h-[34px]" type="text">
                            </label>
                            <label for="" class="col-span-2 flex flex-col justify-start gap-[8px]">
                                <span>Product Images</span>
                                <input type="filed" hidden>
                                <div
                                    class="w-[100%] h-[150px] bg-slate-300 flex justify-center items-center cursor-pointer">
                                    Drop files here to upload</div>
                            </label>
                            <label for="" class="col-span-2 flex flex-col justify-start gap-[8px]">
                                <span>Product Descriptions</span>
                                <input type="text" hidden>
                                <div>此功能未開放，近請期待。</div>
                            </label>
                        </div>
                    </div>

                    <div class="w-[100%] lg:w-[40%] flex flex-col gap-y-[16px] ">
                        <div
                            class="w-[100%] p-[24px] flex flex-col gap-y-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <label for="" class="w-[100%] flex items-center gap-[8px]">
                                <input type="checkbox" class="h-[34px] px-[10px] py-[5px]"
                                    placeholder="Enter Product Title" required>
                                <span>In Stock</span>
                            </label>
                            <label for="" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Product Code</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="Enter Product Title"
                                    required>
                            </label>
                            <label for="" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Product SKU</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="Enter Product Title"
                                    required>
                            </label>
                            <div class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Status</span>
                                <div class="flex gap-[8px]">
                                    <label class="flex gap-[8px] cursor-pointer" for="product_static01">
                                        <input id="product_static01" name="status" type="radio" checked>
                                        <span>Active</span>
                                    </label>
                                    <label class="flex gap-[8px] cursor-pointer" for="product_static02">
                                        <input id="product_static02" name="status" type="radio">
                                        <span>Disabled</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[100%] p-[24px] flex flex-col gap-y-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <div class="w-[100%] font-bold">Product Information</div>
                            <label for="" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Regular Price</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="$0.00" required>
                            </label>
                            <label for="" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Sale Price</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="$0.00" required>
                            </label>
                        </div>
                        <div
                            class="w-[100%] p-[24px] flex flex-col gap-y-[16px] drop-shadow-md rounded-lg border-2 border-solid">
                            <div class="w-[100%] font-bold">Meta Data</div>
                            <label for="" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Meta Title</span>
                                <input type="text" class="h-[34px] px-[10px] py-[5px]" placeholder="Title" required>
                            </label>
                            <label for="" class="w-[100%] flex flex-col justify-start gap-[8px]">
                                <span>Meta Description</span>
                                <textarea class="h-[34px] px-[10px] py-[5px]" name="" id=""
                                    placeholder="Meta Description"></textarea>
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
