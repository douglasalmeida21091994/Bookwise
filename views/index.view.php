<form class="w-full flex space-x-2 mt-6" action="">

    <input type="text" name="pesquisar" id="pesquisar" class="border-stone-800 rounded-md bg-stone-900 text-ml focus:outline-none px-2 py-1" placeholder="Pesquisar...">
    <button type="submit">🔎</button>

</form>

<!-- colocando versão mobile com tailwind se quiser mudar o bg poderia serr -> bg:lg-blue-900 ou seja, apenas no lg seria essa cor -->
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">



    <?php foreach ($livros as $livro): ?>

        <!-- LIVRO -->
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">

            <div class="flex">

                <div class="w-1/3">
                    imagem
                </div>

                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline">
                        <?= $livro['titulo'] ?>
                    </a>
                    <div class="text-xs italic">
                        <?= $livro['autor'] ?>
                    </div>
                    <div class="text-xs italic">
                        ⭐⭐⭐ (3 Avaliações)
                    </div>
                </div>

            </div>

            <div class="text-sm text-justify mt-2">
                <?= $livro['Descrição'] ?>
            </div>

        </div>

    <?php endforeach; ?>


</section>