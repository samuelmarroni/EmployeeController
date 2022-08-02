<x-layout title="Departamentos">
    <section class="site-limits">
        <h1 class="text-center">Departamentos</h1>
        <input id="department" type="text">

        <div class="flex-row">
            @foreach ($departments as $department)
                <div class="box">
                    {{ $department->id }}
                    {{ $department->name }} 
                    <small>({{ $department->employees->count() . ' Funcionários' }})</small>
                </div>
            @endforeach
        </div>
        <div class="flex-row flex-right">
            <a class="button primary" href="/department/create">Cadastrar</a>
        </div>
    </section>
</x-layout>
