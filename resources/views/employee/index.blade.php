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
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
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
        <div class="flex-row flex-right">
            <a class="button primary" href="/employee/create">Cadastrar</a>
        </div>
    </section>
</x-layout>
