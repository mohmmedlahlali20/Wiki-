<style>
.custom-card-style-2 {
    background-color: #f0f0f0;
    border: 2px solid #ccc;
    /* Add more styles as needed */
}
</style>
<div class="container flex justify-center">
    <div class="my-1 px-1 container w-full md:w-1/4 lg:my-4 lg:px-4 lg:w-1/3">
        <article class="overflow-hidden rounded-lg shadow-lg custom-card-style custom-card-style-2">
            <a href="#">
                <img alt="Placeholder" class="block h-auto w-full" src="imags/test.jpg" alt="Image not found">
            </a>
            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                <h1 class="text-lg">
                    <a class="no-underline hover:underline text-black" href="#">

                        <?= $wikiData['titre']; ?><br>
                    </a>
                </h1><br>

                <p class="text-grey-darker text-sm">
                    <?= $wikiData['contenu']; ?><br>
                </p>
            </header>
            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <a class="flex items-center no-underline hover:underline text-black" href="#">
                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                    <p class="ml-2 text-sm">
                        <?= $wikiData['fk_aut_email'];
                     echo '<br>';
                      ?>
                    </p>
                </a>
                <br>

                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                    <span class="hidden">Like</span>
                    <i class="fa fa-heart"></i>
                    <span class="hidden">save</span>
                    <i class="fa fa-bookmark"></i>
                </a>

            </footer>
            <div>
                <p>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <?php 
                            
                            foreach ($Wiki_TG as $TG) {
                                    echo '<div class="ml-4 text-xs mb-6 inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-red-200 text-red-700 rounded-full">
                                        <i class="fas fa-tag mr-2"></i>' 
                                        . $TG['fk_nom_tag'] .
                                        '</div>';
                                }
                        ?>
                    </a>
                </p>
            </div>
        </article>
    </div>
</div>