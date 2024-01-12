
<table>

<div class="flex justify-center">
    <div class="overflow-hidden rounded-lg border border-gray-600 shadow-md m-5 w-1/2">
        <table class="w-full text-end border-collapse bg-white text-left text-sm text-gray-500">
            <!-- ... (your existing table header) ... -->
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $category): ?>
                        <tr class="w-50 flex ">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700"><?= $category['nom_cat'] ?></div>
                                    <div class="font-medium text-gray-700"><?= $category['cat_date'] ?></div>
                                </div>
                            </th>
                        </tr>
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">Steven Jobs</div>
                            <div class="text-gray-400">jobs@sailboatui.com</div>
                        </div>
                    </th>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">No categories</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

