<x-layout title="Funcionários">
    <section class="site-limits flex-col space-40">
        <h1 class="text-center">Listagem de Funcionários</h1>
        <form>
            @csrf
            <fieldset>
                <legend>Filtros</legend>
                <div class="form-line">
                    <div class="form-col">
                        <label class="form-label">Nome</label>
                        <input maxlength="50" type="text" name="name">
                    </div>
                    <div class="form-col">
                        <label class="form-label">Cargo</label>
                        <input maxlength="20" type="text" name="position">
                    </div>
                    <div class="form-col">
                        <label class="form-label" >Departamento</label>
                        <select type="text" name="department">
                            <option value=""></option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-col">
                        <label class="form-label">Salário</label>
                        <input type="text" name="salary">
                    </div>
                    <div class="form-col">
                        <label class="form-label">&nbsp;</label>
                        <button class="button primary" type="submit">Filtrar</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <small>Foram encontrados {{count($employees)}} registros.</small>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Departamento</th>
                    <th>Salário</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->department->name }}</td>
                        <td>{{ $employee->salary }}</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <div class="flex-row right">
            <span class="button secondary">{{ $employees->links() }}</span>
            <a class="button primary" href="/employee/create">Cadastrar</a>
        </div>
    </section>
    @if (session('status'))
        <script>
            alert("{{ session('status') }}")
        </script>
    @endif
</x-layout>
