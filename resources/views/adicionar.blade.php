<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adicionar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-purple-500 flex justify-center">
  <div class="min-w-[50rem] my-5 p-10 bg-purple-300 rounded-lg shadow-lg">
    <header class="h-10 flex items-center justify-between">
      <h1 class="text-3xl font-bold">Adicionar</h1>
    </header>
    <main class="flex-grow mt-5 space-y-5">
      <section>
        <form action="{{ url('adicionar') }}" method="post">
          @csrf
          <section class="grid grid-cols-2 gap-3">
            <div class="space-y-1">
              <label for="imobiliaria">Imobiliária</label>
              <input type="text" name="imobiliaria" id="imobiliaria" required class="w-full p-2 bg-purple-200 rounded-md shadow-md outline-none focus:ring-2 focus:ring-purple-400">
            </div>
            <div class="space-y-1">
              <label for="endereco">Endereço</label>
              <input type="text" name="endereco" id="endereco" required class="w-full p-2 bg-purple-200 rounded-md shadow-md outline-none focus:ring-2 focus:ring-purple-400">
            </div>
            <div class="space-y-1">
              <label for="preco">Preço</label>
              <input type="number" step="0.01" name="preco" id="preco" required class="w-full p-2 bg-purple-200 rounded-md shadow-md outline-none focus:ring-2 focus:ring-purple-400">
            </div>
            <div class="space-y-1">
              <label for="situacao">Situação</label>
              <select name="situacao" id="situacao" required class="w-full p-2 bg-purple-200 rounded-md shadow-md outline-none focus:ring-2 focus:ring-purple-400">
                <option disabled selected>-- Selecionar --</option>
                <option value="0">Indisponível</option>
                <option value="1">À venda</option>
                <option value="2">Para alugar</option>
              </select>
            </div>
            <div class="mt-2 space-x-2 col-start-2 place-self-end">
              <input type="submit" value="Enviar" class="cursor-pointer px-3 py-2 bg-purple-400 rounded-md shadow-md">
              <a href="{{ url('/') }}" class="inline-block px-3 py-2 bg-purple-400 rounded-md shadow-md">Cancelar</a>
            </div>
          </section>
        </form>
      </section>
    </main>
  </div>
</body>

</html>
