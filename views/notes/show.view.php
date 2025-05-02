<?php require( base_path( 'views/partials/head.php' )); ?>
<?php require( base_path( 'views/partials/nav.php' )); ?>
<?php require( base_path( 'views/partials/banner.php' )); ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>
            <a class="text-xl text-blue-400 hover:underline" href="/notes">Go Back Notes</a>
        </p>
        <p class="text-gray-800 text-2xl mt-3"><?php echo htmlspecialchars( $note['body'] ); ?></p>

        <form method="POST" class="mt-6">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
            <a href="note/edit?id=<?php echo $note['id'] ?>" class="text-white mt-2 hover:cursor-pointer bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Edit</a>
            <button type="submit" class="text-white mt-2 hover:cursor-pointer bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
        </form>
    </div>
</main>

<?php require( base_path( 'views/partials/footer.php' )); ?>