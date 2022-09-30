<x-layout title="Cadastro de Departamento">
    <section class="site-limits flex-col space-20">
        <h1 class="text-center">Cadastro de Departamentos</h1>
        <form method="POST" class="flex-col space-40" action="/department/createForm">
            @csrf
            <fieldset>
                <legend>Dados</legend>
                <div class="form-line">
                    <div class="form-col grow">
                        <label class="form-label">Nome</label>
                        <input maxlength="20" type="text" name="name" required>
                    </div>
                </div>
            </fieldset>
            <div class="flex-row right padding-0">
                <a class="button secondary" href="/employee/index">Voltar</a>
                <button class="button primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </section>
</x-layout>