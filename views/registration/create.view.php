<?php require( base_path( 'views/partials/head.php' )); ?>
<?php require( base_path( 'views/partials/nav.php' )); ?>
<?php require( base_path( 'views/partials/banner.php' )); ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">               
        <div class="bg-white shadow sm:overflow-hidden sm:rounded-md p-7">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register to your account</h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="/register" method="POST">
                        <div>
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                            <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" value="<?php echo $_POST['email'] ?? '' ?>" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                            </div>
                            <div class="mt-2">
                                <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <?php if( isset( $errors['password'] ) ): ?>
                            <div class="flex items-center p-4 mb-2 mt-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Danger alert!</span> <?php echo $errors['password'] ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if( isset( $errors['email'] ) ): ?>
                            <div class="flex items-center p-4 mb-2 mt-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Danger alert!</span> <?php echo $errors['email'] ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div>
                            <button type="submit" class="flex w-full hover:cursor-pointer justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php require( base_path( 'views/partials/footer.php' )); ?>