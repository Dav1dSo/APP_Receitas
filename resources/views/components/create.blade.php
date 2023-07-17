<html>

<head>
    @include('../includes/boostrap')
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">Cadastre sua receita e compartilhe!
            </h2>
        </x-slot>
        <div class="container">

            <div class="row mt-5">
                <form action="/createReceita" method="POST">
                    @csrf
                    <div class="mb-3 w-50 mx-auto">
                        <div class="d-flex justify-content-between">
                            <label for="title" class="form-label">Título da receita:</label>
                            @error('title')
                                <div class="text-center text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input name="title" type="text" class="form-control" aria-describedby="TextHelp">
                    </div>

                    <div class="mb-3 w-50 mx-auto">
                        <div class="d-flex justify-content-between">
                            <label for="description" class="form-label">Descrição:</label>
                            @error('description')
                                <div class="text-center text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input name="description" type="text" class="form-control" aria-describedby="TextHelp">
                    </div>
                    <div class="md-3 m-4 w-50 mx-auto">
                        @error('ingredientes')
                            <div class="text-right text-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="ingredientes" class="form-control" placeholder="Ingredientes:"></textarea>
                    </div>
                    <div class="md-3 m-4 w-50 mx-auto">
                        @error('preparo')
                            <div class="text-right text-danger ">{{ $message }}</div>
                        @enderror
                        <textarea name="preparo" class="form-control" placeholder="Modo de preparo:"></textarea>
                    </div>
                    <div class="m-4 d-grid gap-2 col-1 mx-auto">
                        <button type="submit" class="btn btn-primary text-black">Primary</button>
                    </div>
                </form>
            </div>
        </div>

    </x-app-layout>
</body>

</html>
