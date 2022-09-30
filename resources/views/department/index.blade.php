<style>.box{text-align: center}</style>

<x-layout title="Departamentos">
    <section class="site-limits flex-col space-40">
        <h1 class="text-center">Departamentos</h1>
        <div class="flex-row hcenter wrap">
            @foreach ($departments as $department)
                <div class="box">
                    ID {{ $department->id }} -
                    {{ $department->name }} <br><br>
                    <small>({{ $department->employees->count() . ' Funcionários' }})</small>
                </div>
            @endforeach
        </div>
        <div class="flex-row hcenter">
            <a class="button primary" href="/department/create">Cadastrar</a>
        </div>
    </section>
</x-layout>
