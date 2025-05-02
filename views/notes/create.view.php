<?php require( base_path( 'views/partials/head.php' )); ?>
<?php require( base_path( 'views/partials/nav.php' )); ?>
<?php require( base_path( 'views/partials/banner.php' )); ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">               
        <div class="bg-white shadow sm:overflow-hidden sm:rounded-md p-7">
            <div>
                <form method="POST" action="/notes" class="max-w-sm mx-auto">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                    <textarea 
                        id="body"
                        name="body"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Here is an idea for your note..."
                    ><?php echo $_POST['body'] ?? '' ?></textarea>
                    <?php if( isset( $errors['body'] ) ): ?>
                        <div class="flex items-center p-4 mb-2 mt-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span> <?php echo $errors['body'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="text-white mt-2 hover:cursor-pointer bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require( base_path( 'views/partials/footer.php' )); ?>