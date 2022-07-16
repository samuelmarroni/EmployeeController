<x-layout title="Funcionários">
    <section class="site-limits">
        <form>
            @csrf
            <fieldset>
                <legend>Filtros</legend>
                <div class="form-line">
                    <div class="form-column">
                        <label class="form-label">Cargo</label>
                        <input type="text" name="position">
                    </div>
                    <div class="form-column">
                        <label class="form-label" >Departamento</label>
                        <select type="text" name="department">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-column">
                        <label class="form-label">Salário</label>
                        <input type="text" name="salary">
                    </div>
                    <div class="form-column">
                        <label class="form-label">&nbsp;</label>
                        <button class="button primary" type="submit">Filtrar</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <table>
            @foreach ($employees as $employee)
                {{ $employee->name }}
            @endforeach
        </table>
        <div class="flex-row flex-right">
            <a class="button primary" href="/employee/create">Cadastrar</a>
        </div>
    </section>
</x-layout>
