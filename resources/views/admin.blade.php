<x-app-layout>
      <x-slot name="header">
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">BIENVENID@
                                <font style="text-transform: uppercase;"><span>{{Auth::user()->name}}</span></font>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
      </x-slot>

 <section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="card-body">
        <div class="typo-headers">
          <h2 class="pb-2 display-5">Administrad@r</h2>
        </div><br>
        <div>
                <h3>Como administrad@r</h3><br>
                <ol class="vue-ordered">
                  <li>
                    Puede acceder a sus clientes y reservas
                  </li>
                </ol>
              </div>
            </div>
            
        </div>
    </div>
</section>
  </x-app-layout>
