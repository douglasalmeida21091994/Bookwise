<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookwise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">

        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">

            <div class="font-bold text-xl tracking-wide">Book Wise</div>

            <ul class="flex space-x-4 font-bold">
                <li>
                    <a href="/" class="text-lime-500">Explorar</a>
                </li>
                <li>
                    <a href="/meuslivros.php" class="hover:underline">Meus Livros</a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="/login.php" class="hover:underline">Fazer Login</a>
                </li>
            </ul>

        </nav>

    </header>

    <main class="mx-auto max-w-screen-lg py-4 px-4 space-y-5">

        <form class="w-full flex space-x-2 mt-6" action="">

            <input type="text" name="pesquisar" id="pesquisar" class="border-stone-800 rounded-md bg-stone-900 text-ml focus:outline-none px-2 py-1" placeholder="Pesquisar...">
            <button type="submit">🔎</button>

        </form>

        <section class="space-y-4">

            <!-- LIVRO -->
            <div class="w-1/3 p-2 rounded border-stone-800 border-2 bg-stone-900">

                <div class="flex" >

                    <div class="w-1/3">
                        imagem
                    </div>

                    <div>
                        <div class="font-semibold">
                            titulo
                        </div>
                        <div class="text-xs italic">
                            autor
                        </div>
                        <div class="text-xs italic">
                            ⭐⭐⭐ (3 Avaliações)
                        </div>
                    </div>

                </div>

                <div class="text-sm">
                    descrição
                </div>

            </div>

        </section>

    </main>

</body>

</html>