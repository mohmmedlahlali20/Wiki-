<style>
    .custom-card-style-2 {
    background-color: #f0f0f0;
    border: 2px solid #ccc;

}
</style>

<div class="search flex-center bg-gray-200">
    <form>
        <input type="search" id="inputsearch" name="inputsearch"
            class="border border-gray-300 rounded text-gray-300 p-2" placeholder="Search">
    </form>
    <div class="result"></div>
</div>

<div class="container flex flex-wrap flex-row my-12 mx-auto px-4 md:px-12">
    <?php foreach ($wikiData as $wiki): ?>
        <div class="my-1 px-1 container w-full md:w-1/4 lg:my-4 lg:px-4 lg:w-1/3">
    <article class="overflow-hidden rounded-lg shadow-lg custom-card-style custom-card-style-2">
            <a href="#">
                <img alt="Placeholder" class="block h-auto w-full" src="imags/test.jpg" alt="Image not found">
            </a>
            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                <h1 class="text-lg">
                    <a class="no-underline hover:underline text-black" href="#">
                        <?= $wiki->titre; ?><br>
                    </a>
                </h1><br>
                <p class="text-lg">

                    <a href="index.php?action=show&id=<?= $wiki->id_w; ?>"
                        class="text-bleu-700 no-underline hover:underline">read more</a>
                </p>
                <p class="text-grey-darker text-sm">
                    <?= $wiki->wiki_date; ?><br>
                </p>
            </header>
            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <a class="flex items-center no-underline hover:underline text-black" href="#">
                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                    <p class="ml-2 text-sm">
                        <?= $wiki->fk_aut_email; ?>
                    </p>
                </a>
                <p>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden"></span>
                    </a>
                </p>
                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                    <span class="hidden">Like</span>
                    <i class="fa fa-heart"></i>
                    <span class="hidden">save</span>
                    <i class="fa fa-bookmark"></i>
                </a>
            </footer>
        </article>
    </div>
    <?php endforeach; ?>
</div>

<script src="https://kit.fontawesome.com/c0bae2ffa6.js" crossorigin="anonymous"></script>
<script>
function showFullContent(id) {
    var content = document.getElementById(id).innerText;
    alert(content);
}
document.addEventListener("DOMContentLoaded", function() {
    let input = document.getElementById("inputsearch");

    input.addEventListener("keyup", function(event) {
        let searchTerm = event.target.value.trim();

        let xhr = new XMLHttpRequest();
        xhr.open('GET', `index.php?action=search&searchTerm=${searchTerm}`, true);


        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    try {
                        let data = JSON.parse(xhr.responseText);
                        console.log(data);
                        // Handle the received data as needed
                    } catch (e) {
                        console.error('Error parsing JSON:', e);
                    }
                } else {
                    console.error('Error fetching data:', xhr.status, xhr.statusText);
                }
            }
        };


        xhr.send();
    });

    function displaySearchResults(data) {

        let resultDiv = document.querySelector('.result');
        resultDiv.innerHTML = ''; // Clear previous results

        data.forEach(function(wiki) {

            let resultItem = document.createElement('div');
            resultItem.textContent = wiki.titre;
            resultDiv.appendChild(resultItem);
        });
    }
});
</script>