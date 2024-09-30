<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

</head>

<body>
    <div class="z-5 px-8 items-center  md:px-16 lg:px-32 xl-64  flex justify-between w-full h-20 bg-red-600 ">
        <!-- links -->
        <div class=" w-1/2 flex gap-4">
            <li class="text-black uppercase text-base list-none ">Home</li>
            <li class="text-black uppercase text-base list-none ">
                <li id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black list-none uppercase">
                  Collections <i class="bi bi-arrow-down-short"></i>
                </li>

                <!-- Dropdown menu -->
                <div id="dropdownHover" class="mt-10 flex  z-[30] hidden bg-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                    <div class="py-2 w-44 -h-full " aria-labelledby="dropdownHoverButton">
                        <img class= " object-cover"src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                </div>
            </li>
            <li class="text-black uppercase text-base list-none ">pages</li>
            <li class="text-black uppercase text-base list-none ">features</li>
            <li class="text-black uppercase text-base list-none ">buy Proto</li>
        </div>
        <div class="h-12 w-2/4">
            <img class="object-cover" src="https://porto-demo6.myshopify.com/cdn/shop/t/34/assets/logo_black_new.png?v=82644603109002165811639886510" alt="">
        </div>

        <!-- logo -->


        <!-- icons -->
        <div class="flex w-1/2 justify-end gap-5">
            <p class="text-2xl font-bolder">English</p>
            <p class="text-2xl font-bolder">links</p>
            <p><i class=" text-xl bi bi-person"></i></p>
            <p><i class=" text-xl bi bi-bag-heart"></i></p>
            <p><i class=" text-xl bi bi-bag-fill"></i></p>


        </div>
    </div>
</body>

</html>