<x-layout title="Cadastro de Funcionário">
    <section class="site-limits flex-col space-20">
        <h1 class="text-center">Cadastro de Funcionários</h1>
        <form method="POST" class="flex-col space-40" action="/employee/createForm">
            @csrf
            <fieldset>
                <legend>Dados</legend>
                <div class="form-line">
                    <div class="form-col grow">
                        <label class="form-label">Nome</label>
                        <input maxlength="50" type="text" name="name" required>
                    </div>
                    <div class="form-col">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" name="birthday" required>
                    </div>
                    <div class="form-col">
                        <label class="form-label">CPF/CNPJ</label>
                        <input type="text" name="document" required>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Detalhes</legend>
                <div class="form-line">
                    <div class="form-col">
                        <label class="form-label">Cargo</label>
                        <input maxlength="20" type="text" name="position" required>
                    </div>
                    <div class="form-col">
                        <label class="form-label">Salário</label>
                        <input type="number" step="0.01" name="salary" required>
                    </div>
                    <div class="form-col">
                        <label class="form-label">Departamento</label>
                        <select type="text" name="department" required>
                            <option value=""></option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
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