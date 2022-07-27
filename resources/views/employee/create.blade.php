<x-layout title="Cadastro de Funcionário">
    <section class="site-limits">
        <form method="POST" action="/employee/createForm">
            <fieldset>
                <legend>Dados</legend>
                <div class="form-line">
                    <div class="form-col">
                        <label class="form-label">Nome</label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-col">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" name="birthday">
                    </div>
                    <div class="form-col">
                        <label class="form-label">CPF/CNPJ</label>
                        <input type="text" name="document">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Detalhes</legend>
                <div class="form-line">
                    <div class="form-col">
                        <label class="form-label">Cargo</label>
                        <input type="text" name="position">
                    </div>
                    <div class="form-col">
                        <label class="form-label">Salário</label>
                        <input type="number" step="0.01" name="salary">
                    </div>
                    <div class="form-col">
                        <label class="form-label">Departamento</label>
                        <input type="text" name="department">
                    </div>
                </div>
            </fieldset>
            <div class="flex-row">
                <a class="button secondary" href="/employee/index">Voltar</a>
                <button class="button primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </section>
</x-layout>