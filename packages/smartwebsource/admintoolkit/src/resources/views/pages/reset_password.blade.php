<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/logo-small.svg" type="image/svg+xml" />
    <title>Document</title>
    @vite(['resources/js/app.js', ...glob('resources/js/custom/*.js')])
<body>

    <div id="app" class="flex min-h-screen w-full items-center justify-center">
        <main class="container flex-grow p-4 sm:p-6">
            <div class="card mx-auto w-full max-w-md">
                <div class="card-body px-10 py-12">
                    <div class="flex flex-col items-center justify-center">
                        <img src="./images/logo-small.svg" alt="logo" class="h-[50px]" />
                        <h5 class="mt-4">Reset Your Password</h5>
                    </div>

                    <div class="mt-6 flex flex-col gap-5">
                        <!-- New Password -->
                        <div>
                            <label class="label mb-1">New Password</label>
                            <input type="password" class="input" placeholder="New Password" />
                        </div>
                        <!--Confirm Password -->
                        <div>
                            <label class="label mb-1">Confirm Password</label>
                            <input type="password" class="input" placeholder="Confirm Password" />
                        </div>
                        <!-- Reset Password -->
                        <div class="mt-2">
                            <button class="btn btn-primary w-full py-2.5">Reset Password</button>
                        </div>
                        <!-- Go back & login -->
                        <div class="flex justify-center">
                            <p class="text-sm text-slate-600 dark:text-slate-300">
                                Go back to
                                <a href="./login.html" class="text-sm text-primary-500 hover:underline">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
