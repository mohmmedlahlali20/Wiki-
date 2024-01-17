<div class="flex-1 container mx-auto p-8">
    <h1 class="text-3xl font-semibold mb-8">Statistics Page</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2  justify-between md:grid-cols-3 lg:grid-cols-4 gap-8">

        <div class="bg-white p-6 rounded-md shadow-md">
            <?php
         
                if (isset($wikis) && is_array($wikis)) {
                    
                ?>
            <h2 class="text-lg font-semibold mb-2">Number of wiki's</h2>
            <p class="text-3xl font-bold text-blue-500"><?= count($wikis) ?></p>
            <?php
                } else {
                    echo "Number of wiki's: 0"; 
                }
        ?>
        </div>

        <div class="bg-white p-6 rounded-md shadow-md">
            <?php
         
                if (isset($tags) && is_array($tags)) {
                    
                ?>
            <h2 class="text-lg font-semibold mb-2">Number of tags</h2>
            <p class="text-3xl font-bold text-blue-500"><?= count($tags) ?></p>
            <?php
                } else {
                    echo "Number of wiki's: 0"; 
                }
        ?>
        </div>
        <!-- Statistic Card 3 -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <?php
         
                if (isset($categories) && is_array($categories)) {
                    
                ?>
            <h2 class="text-lg font-semibold mb-2">Number of categories</h2>
            <p class="text-3xl font-bold text-blue-500"><?= count($categories) ?></p>
            <?php
                } else {
                    echo "Number of wiki's: 0"; 
                }
        ?>
        </div>

        
    </div>
    <!-- category -->
    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Add Category</h2>
        <form action="index.php?action=addCat" method="post" class="flex">
            <input type="text" name="nom_cat" placeholder="Category Name"
                class="w-50 border-2 border-gray-800   flex justify-center ml-8 p-2 rounded-l-md">
            <input type="datetime-local" name="cat_date" placeholder="Category Name"
                class="w-50 border-2 border-gray-800   flex justify-center ml-8 p-2 rounded-l-md">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
        </form>
    </div>
    <br><br><br>
    <div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">Categories</h2>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3">category</th>
                        <th scope="col" class="px-6 py-3">datt Category</th>
                        <th scope="col" class="px-6 py-3"> Delet category</th>
                        <th scope="col" class="px-6 py-3"> edit category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $CAT) { ?>
                    <tr>
                        <td scope="col" class="px-6 py-3"><?= $CAT->getNom_cat(); ?></td>
                        <td scope="col" class="px-6 py-3"><?= $CAT->getCat_date(); ?></td>
                        <td scope="col" class="px-6 py-3">
                            <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                href="index.php?action=deleteCat&nom_cat=<?= $CAT->getNom_cat() ?>">DELET</a>
                        </td>
                        <td scope="col" class="px-6 py-3">
                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                                href="index.php?action=editCat&nom_cat=<?= $CAT->getNom_cat() ?>">EDIT</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>
    <hr>
    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Add Tag's</h2>
        <form action="index.php?action=addTag" method="post" class="flex">
            <input type="text" name="nom_tag" placeholder="Tag Name"
                class="w-50 border-2 border-gray-800 flex justify-center ml-8 p-2 rounded-l-md">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-md">Add</button>
        </form>
        <div id="message-container"></div>
        <br><br><br>
    </div>

    <div class="container">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Tag</th>
                        <th scope="col" class="px-6 py-3">Edit Category</th>
                        <th scope="col" class="px-6 py-3">Hide Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tags as $tag) { ?>
                    <tr>
                        <td scope="col" class="px-6 py-3"><?= $tag->getNom_tag(); ?></td>
                        <td scope="col" class="px-6 py-3">
                            <a href="index.php?action=editCategory&nom=<?= $tag->getNom_tag(); ?>"
                                class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                Edit
                            </a>
                        </td>
                        <td scope="col" class="px-6 py-3">
                            <a href="index.php?action=deleteTag&nom=<?= $tag->getNom_tag(); ?>"
                                class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<br><br><br>
    <!-- wiki tabel  -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <style>
            text = right;
            
        </style>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3"> Category</th>
                    <th scope="col" class="px-6 py-3">contenu </th>
                    <th scope="col" class="px-6 py-3"> Date</th>
                    <th scope="col" class="px-6 py-3"> email d'auteur</th>
                    <th scope="col" class="px-6 py-3">Archiver</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wikis as $wiki) { ?>
                <tr>
                    <td scope="col" class="px-6 py-3"><?= $wiki->id_w; ?></td>
                    <td scope="col" class="px-6 py-3"><?= $wiki->titre; ?></td>
                    <td scope="col" class="px-6 py-3"><?= $wiki->fk_cat; ?></td>
                    <td scope="col" class="px-6 py-3"><?= $wiki->contenu; ?></td>
                    <td scope="col" class="px-6 py-3"><?= $wiki->wiki_date; ?></td>
                    <td scope="col" class="px-6 py-3"><?= $wiki->fk_aut_email; ?></td>
                    <td scope="col" class="px-6 py-3">
                        <a href="index.php?action=archive&titre=<?= $wiki->titre; ?>"
                            class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                            Archive
                        </a>
                    </td>
                </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>
<br><br><br>






    <script>
    <?php
      if ($inserted) {
        echo 'document.getElementById("message-container").innerHTML = "<p style=\'color: green; font-weight: bold;\'>Tag inserted successfully!</p>";';
    } else {
        echo 'document.getElementById("message-container").innerHTML = "<p style=\'color: red; font-weight: bold;\'>Failed to insert tag.</p>";';
    }
    ?>
    </script>