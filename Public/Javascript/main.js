// $(document).ready(function () {
//     var resultsContainer = $('#searchResults');

//     $('#searchInput').on('input', function () {
//         var searchTerm = $(this).val();

//         // You can remove the condition checking for a minimum length
//         if (searchTerm.length < 3) {
//             resultsContainer.html('<p>Enter at least 3 characters to search.</p>').show();
//             return;
//         }
//         $.ajax({
//             type: 'GET',
//             url: 'index.php',
//             data: {
//                 action: 'search',
//                 query: searchTerm
//             },
//             dataType: 'json',
// success: function (data) {

//     console.log("AJAX request successful!");
//                 resultsContainer.html(''); 

//                 if (data.length === 0) {
//                     resultsContainer.append('<p>No results found.</p>');
//                 } else {
//                     $.each(data, function (index, result) {
//                         var cardHtml = `
//                             <h1 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">${result.titre}</h1>`;
//                         resultsContainer.append(cardHtml);
//                     });
//                 }

//                 resultsContainer.show();
//             },
//             error: function (xhr, status, error) {
//                 console.error("AJAX Error:", status, error);
//                 resultsContainer.html('<p>Error occurred while fetching results.</p>').show();
//             },
//             complete: function () {
//                 // Hide loading indicator or perform any cleanup if needed
//             }
//         });
//     });
// });



