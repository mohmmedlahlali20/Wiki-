<div id="searchResults" class="flex flex-row justify-between flex-wrap"></div>
    <div class="flex flex-row justify-between flex-wrap">
        <?php foreach ($wikiData as $wiki) : ?>
        <div class="max-w-2xl mx-auto">
            <div
                class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="imags\test.jpg" alt="Image not found">
                </a>
                <div class="p-5">
                    <a href="">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">
                            <?= $wiki['titre']; ?></h5>
                    </a>
                    <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                        <a href="index.php?action=allCategory" class="hover:underline">
                            <h2 class="text-2xl font-bold tracking-normal text-gray-200"><?= $wiki['fk_cat']; ?></h2>
                        </a>
                    </div>
                    <p class="font-normal text-gray-700 mb-3 dark:text-gray-400"><?= $wiki['fk_aut_email']; ?>email</p>
                    <h5 class="font-normal text-gray-700 mb-3 dark:text-gray-400"><?= $wiki['wiki_date']; ?></h5>
                    <p class="font-normal text-gray-700 mb-3 dark:text-gray-400"><?= $wiki['contenu']; ?></p>
                    <!-- <h4 class="font-normal text-gray-700 mb-3 dark:text-gray-400"><?= $wiki['nom']; ?></h4> -->
                    <a href="index.php?action=view_wiki&id=<?= $wiki['id_w']; ?>"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>




<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#search').on('keyup', function () {
        var query = $(this).val();

        $.ajax({
            type: 'GET',
            url: 'index.php?action=search',
            data: { query: query },
            dataType: 'json',
            success: function (data) {
                // Clear the search results
                $('#searchResults').html('');

                // $('#searchResults').empty(); 

                if (data.wikiData === 'not found') {
                    $('#searchResults').html('<p>No results found</p>');
                } else {
                    // Iterate through each result and append to the card
                    $.each(data.wikiData, function(index, wiki) {
                        var resultHtml = `
                            <div class="max-w-2xl mx-auto">
                                <!-- Your card HTML here -->
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">
                                    ${wiki.titre}
                                </h5>
                                <!-- Other card content here -->
                                <a href="index.php?action=view_wiki&id=${wiki.id_w}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <!-- End of your card HTML -->
                            </div>
                        `;

                        // Append the resultHtml to the searchResults div
                        $('#searchResults').append(resultHtml);
                    });
                }
            },
            error: function () {
                console.log('Error fetching data');
            }
        });
    });
});

</script>