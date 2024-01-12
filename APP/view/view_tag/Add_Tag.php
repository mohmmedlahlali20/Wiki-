<!-- add tag -->
<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600">ADD tag</h2>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">hello , </p>
                        <p>Please fill out all the fields.</p>
                    </div>
                    <form action="index.php?action=ajouterTAG" method="POST">
                        <div class="md:col-span-2">
                            <label for="Tag">Tag</label>
                            <input type="text" name="nom_tag" id="Tag"
                                class="h-10 border mt-1 rounded px-4 w-50 bg-gray-50" value=""
                                placeholder="Add a new Tag" />
                        </div>
                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add
                                    tag</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>