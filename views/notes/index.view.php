<?php require( base_path( 'views/partials/head.php' )); ?>
<?php require( base_path( 'views/partials/nav.php' )); ?>
<?php require( base_path( 'views/partials/banner.php' )); ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach( $notes as $note ): ?>
                <li>
                    <a class="text-blue-500 text-xl hover:underline" href="note?id=<?php echo $note['id'] ?>"><?php echo htmlspecialchars( $note['body'] ) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-20">
            <a class="hover:transition text-white font-bold bg-blue-700 hover:opacity-55 py-2 px-6" href="note/create">Create Note</a>
        </p>
    </div>
</main>

<?php require( base_path( 'views/partials/footer.php' )); ?>