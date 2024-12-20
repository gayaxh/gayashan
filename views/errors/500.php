<!DOCTYPE html>
<html lang="en">

<head>
    <title>Internal Server Error - <?= config('APP_NAME') ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= config('APP_AUTHOR') ?>">
    <link rel="shortcut icon" href="<?= asset('images/favicon.png'); ?>">

    <link href="<?= asset('assets/css/error_pages.css'); ?>" rel="stylesheet">
</head>

<body>

    <section class="bg-white dark:bg-gray-900 flex h-screen">
        <div class="py-8 px-4 max-w-screen-xl lg:py-16 lg:px-6 m-auto">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500"><?= $error['code'] ?></h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white"><?= $error['message'] ?></p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">We are already working to solve the problem.</p>
            </div>
        </div>
    </section>

</body>

</html>