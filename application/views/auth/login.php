<!-- <!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
</head>

<body>
    

	<?php if ($this->session->flashdata('gagal') == TRUE) : ?>
	<?= $this->session->flashdata('message'); ?>
	
    <div class="bg-red-100 border-t absolute z-50 w-full border-b border-red-500 text-red-700 px-4 py-3" role="alert">
        <p class="font-bold">Peringantan</p>
        <p class="text-sm">Username atau Password Salah.</p>
    </div>

	<?php endif ?>


	<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
		<div class="sm:mx-auto sm:w-full sm:max-w-sm">
			<h2 class="lorem-warna mt-16 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
				Sistem Informasi Pelayanan Surat Kelurahan Labukkang
			</h2>
		</div>

		<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
			<form class="space-y-6" action="#" method="post">
				<div>
					<label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
					<div class="mt-2">
						<input id="username" name="username" type="username" autocomplete="username" required
							class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
					</div>
				</div>

				<div>
					<div class="flex items-center justify-between">
						<label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
						<div class="text-sm">
							<a href="#" class="lorem-warna font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
						</div>
					</div>
					<div class="mt-2">
						<input id="password" name="password" type="password" autocomplete="current-password" required
							class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
					</div>
				</div>

				<div>
					<button type="submit"
						class="lorem flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
						in</button>
				</div>
			</form>
		</div>
	</div>
</body> -->


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>LOGIN</title>
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/lineone/css/app.css" />
	<script src="<?= base_url() ?>/assets/lineone/js/app.js" defer></script>
	<link rel="preconnect" href="<?= base_url() ?>/assets/lineone/fonts.googleapis.com/index.html" />
	<link rel="preconnect" href="<?= base_url() ?>/assets/lineone/fonts.gstatic.com/index.html" crossorigin />
	<link
		href="<?= base_url() ?>/assets/lineone/fonts.googleapis.com/css2aa0e.css?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
		rel="stylesheet" />
	<script>
		localStorage.getItem("_x_darkMode_on") === "true" &&
			document.documentElement.classList.add("dark");

	</script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">

	<div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
		<main class="grid w-full grow grid-cols-1 place-items-center">
			<div class="w-full max-w-[26rem] p-4 sm:px-5">
				<div class="text-center">
					<img class="mx-auto w-16" src="<?= base_url() ?>assets/foto/logosurat.jpg" alt="logo" />
					<div class="mt-4">
						<h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
							Silahkan Login
						</h2>
						<p class="text-slate-400 dark:text-navy-300">
							Selamat Datang Di Sistem Informasi Pelayanan Surat Kelurahan Labukkang
						</p>
					</div>
				</div>

				<?php if ($this->session->flashdata('gagal') == TRUE) : ?>
				<?= $this->session->flashdata('message'); ?>

				<div class="alert flex mt-10 mb-10 rounded-full bg-primary/10 py-4 px-4 text-primary dark:bg-accent-light/15 dark:text-accent-light sm:px-5">
					Username atau Password Salah.
				</div>
				<?php endif ?>


				<form action="#" method="post">
					<div class="card mt-5 rounded-lg p-5 lg:p-7">
						<label class="block">
							<span>Username:</span>
							<span class="relative mt-1.5 flex">
								<input
									class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
									placeholder="Enter Username" name="username" type="text" />
								<span
									class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
									<svg xmlns="http://www.w3.org/2000/svg"
										class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
											d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
									</svg>
								</span>
							</span>
						</label>

						<label class="mt-4 block">
							<span>Password:</span>
							<span class="relative mt-1.5 flex">
								<input name="password"
									class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
									placeholder="Enter Password" type="password" />
								<span
									class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
									<svg xmlns="http://www.w3.org/2000/svg"
										class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
											d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
									</svg>
								</span>
							</span>
						</label>

						<button type="submit"
							class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
							Login
						</button>
					</div>
				</form>
				<div class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300">
					<a href="#">Privacy Notice</a>
					<div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
					<a href="#">Term of service</a>
				</div>
			</div>
		</main>
	</div>

	<div id="x-teleport-target"></div>
	<script>
		window.addEventListener("DOMContentLoaded", () => Alpine.start());

	</script>
</body>

</html>
