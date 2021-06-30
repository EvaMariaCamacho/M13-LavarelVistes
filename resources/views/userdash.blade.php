 <x-app-layout>
      <x-slot name="header">
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">BIENVENIDO
                                <span>{{Auth::user()->name}}</span>
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
                      <h2 class="pb-2 display-5">Realice su reserva</h2>
                      <h3 class="pb-2 display-5">Y disfrute de sus vacaciones</h3>
                    </div><br>
                    <div>
                            <h3>Ordered</h3><br>
                            <ol class="vue-ordered">
                              <li>
                                A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                              </li>
                              <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                              <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                              <li>
                                In addition, even at moderate distances, the striking striping merges to an apparent grey.
                                <ul class="vue-list-inner">
                                  <li>However, the camouflage has been contested with arguments that most of a zebra's predator.
                                  </li>
                                  <li>Such as lions and hyenas cannot see well at a distance.</li>
                                  <li>More likely to have smelled or heard a zebra.</li>
                                </ul>
                              </li>
                              <li>Before seeing it from a distance, especially at night.</li>
                            </ol>
                          </div>
                        </div>
                        
                    </div>
                </div>
            </section>
  </x-app-layout>
  @include('Themes.footer')