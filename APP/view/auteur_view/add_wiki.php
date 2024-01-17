<style>
body {
    overflow-y: hidden;
}
</style>
<div class="flex justify-center mt-2 items-center w-screen h-screen bg-white">
    <!-- COMPONENT CODE -->
    <div class="container mx-auto my-4 px-4 lg:px-20">

        <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
            <div class="flex">
                <h1 class="font-bold uppercase text-5xl">Send your <br /> new wiki's</h1>
            </div>
            <form action="index.php?action=ADD" method="POST">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">

                    <input
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="title" placeholder="Title*" />
                    <div class="relative">
                        <select name="category"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">';
                            <option>Category*</option>
                            <?php
                            // var_dump($categories);
                            foreach ($categories as $category)
                            {
                                echo '<option>' .$category->getNom_cat() ; '</option>';
                            }
                            ?>
                        </select>
                        <div class="pointer-events-none absolute top-0 mt-2 px-2 text-gray-500 text-lg">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="relative">

                        <div class="flex flex-wrap">
                            <?php 
                        foreach($tags as $tag) {
                            echo '<label class="mr-4"><input type="checkbox" name="tag[]" value="'.$tag->getNom_tag().'">'.$tag->getNom_tag().'</label>';
                        }
                        ?>
                        </div>

                    </div>
                </div>
                <div class="my-4">
                    <textarea placeholder="your new wiki's*" name="wiki"
                        class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="my-2 w-1/2 lg:w-1/4">
                    <button  class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                        focus:outline-none focus:shadow-outline" type="submit">
                        Send Message
                    </button>
                </div>
            </form>

        </div>

        <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl">
            <div class="flex flex-col text-white">
                <h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
                <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                    tincidunt arcu diam,
                    eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
                </p>

                <div class="flex my-4 w-2/3 lg:w-1/2">
                    <div class="flex flex-col">
                        <i class="fas fa-map-marker-alt pt-2 pr-2" />
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-2xl">Main Office</h2>
                        <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>