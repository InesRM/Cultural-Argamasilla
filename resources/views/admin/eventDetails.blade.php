<x-layout-admin>

    <!-- Content -->

    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between p-10 bg-slate-100 mt-10 rounded-xl">
            <img class="w-500 h-500 object-cover rounded-xl" src="{{asset('/images/'. $evento->imagen)}}" alt="">

            <div>
                <h1 class="text-xl">Descripcion: </h1>
                <p>{{$evento->descripcion}}</p>
            </div>


        </div>
    </section>

    <!-- End Content -->
</x-layout-admin>
