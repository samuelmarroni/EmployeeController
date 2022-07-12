<x-layout title="Funcionários">
    <section class="site-limits">
        <form action="employee/create">
            @csrf
            <fieldset>
                <legend>Filtros</legend>
                <div class="form-row">
                    <div class="form-column">
                        <label>Cargo</label>
                        <input type="text" name="position">
                    </div>
                    <div class="form-column">
                        <label>Departamento</label>
                        <input type="text" name="department">
                    </div>
                    <div class="form-column">
                        <label>Salário</label>
                        <input type="text" name="salary">
                    </div>
                    <button>Filtrar</button>
                </div>
            </fieldset>
        </form>
        <table>

        </table>
        <a class="button-primary" href="/employee/create">Cadastrar</a>
    </section>
</x-layout>
