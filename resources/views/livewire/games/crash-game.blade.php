<div>
    <div class="bg-blue-100 rounded-lg py-5 px-6 mb-3 text-base text-blue-700 inline-flex items-center w-full" role="alert"></div>

    <div class="grid grid-cols-10 gap-5 w-full">

        <div class="col-span-7 grid grid-cols-12 gap-5">
            <div class="col-span-4">
                <div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">Crash Now</div>
                        <div class="p-3">
                            <div class="flex justify-center">
                                <div class="">

                                  <form action="" class="p-3 cardd" wire:submit.prevent="startGame">
                                      <div class="flex flex-col gap-5">
                                        <div class="flex justify-between items-center gap-3">
                                            <input type="text" class="hes-input-text w-full" id="exampleNumber0" placeholder="Enter Token Mount To Start"/>
                                        </div>

                                        <div class="flex w-full justify-between items-center gap-3">
                                            <div class="w-1/3">
                                                <input type="number" class="hes-input-text" placeholder="Zarib"/>
                                            </div>
                                            <div  class="w-2/3">
                                                <div class="relative">
                                                    <input
                                                      type="range"
                                                      class="w-full hes-input-range"
                                                    />
                                                  </div>
                                            </div>
                                        </div>


                                      </div>

                                      <div>
                                        <span>{{$this->gameNumber}}</span>
                                        <div>
                                            <span>{{$this->gameArray}}</span>
                                        </div>
                                        <div>{{$this->gameCount}}</div>
                                        <div>{{$this->gameZarib}}</div>
                                        <button type="submit" class="hes-btn-primary w-full">Crash Now</button>
                                    </div>

                                  </form>



                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                {{-- <div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">Line chart</div>
                        <canvas class="p-3" id="chartLine"></canvas>
                    </div>

                      <!-- Required chart.js -->
                      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                      <!-- Chart line -->
                      <script>
                        const labels = ["January", "February", "March", "April", "May", "June"];
                        const data = {
                          labels: labels,
                          datasets: [
                            {
                              label: "My First dataset",
                              backgroundColor: "hsl(252, 82.9%, 67.8%)",
                              borderColor: "hsl(252, 82.9%, 67.8%)",
                              data: [{{$this->gameNumber}}],
                              tension: 0.9
                            },
                          ],
                        };

                        const configLineChart = {
                          type: "line",
                          data,
                          options: {},
                        };

                        var chartLine = new Chart(
                          document.getElementById("chartLine"),
                          configLineChart
                        );
                      </script>
                </div> --}}
                <div class=" w-full shadow rounded p-4 border bg-white" style="height: 32rem;">
                    <livewire:livewire-line-chart
                    key="{{ $LineChartModel->reactiveKey() }}"
                    :line-chart-model="$LineChartModel"
                    />
                </div>
            </div>

            <div class="col-span-12">
                <div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">Line chart</div>
                        <div class="p-3">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                      <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                          <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              #
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              First
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Last
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Handle
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              Mark
                                            </td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              Otto
                                            </td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              @mdo
                                            </td>
                                          </tr>
                                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              Jacob
                                            </td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              Thornton
                                            </td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              @fat
                                            </td>
                                          </tr>
                                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              Larry
                                            </td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              Wild
                                            </td>
                                            <td class="text-xs text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                              @twitter
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-3">
            <div class="col-span-2">
                <div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">Online Players</div>
                        <div class="flex flex-col gap-2">
                            <div class="p-2 flex justify-between items-center gap-1 text-xs">
                                <div>
                                    <div class="rounded-full text-gray-500  font-semibold text-sm flex align-center cursor-pointer active:bg-gray-300 transition duration-300 ease w-max">
                                        <img class="rounded-full w-9 h-9 max-w-none" alt="A"
                                        src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" />
                                        <span class="flex items-center px-3 py-2 text-xs">
                                        John Doe
                                        </span>
                                        <button class="bg-transparent hover focus:outline-none">
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-500 text-xs font-semibold">
                                        150$
                                    </span>
                                </div>
                            </div>
                            <div class="p-2 flex justify-between items-center gpa-1">
                                <div>
                                    <span
                                    class="rounded-full text-gray-500  font-semibold text-sm flex align-center cursor-pointer active:bg-gray-300 transition duration-300 ease w-max">
                                    <img class="rounded-full w-9 h-9 max-w-none" alt="A"
                                    src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" />
                                    <span class="flex items-center px-3 py-2">
                                    John Doe
                                    </span>
                                    <button class="bg-transparent hover focus:outline-none">
                                    </button>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-gray-500 text-sm font-semibold">
                                        150$
                                    </span>
                                </div>
                            </div>
                            <div class="p-2 flex justify-between items-center gpa-1">
                                <div>
                                    <span
                                    class="rounded-full text-gray-500  font-semibold text-sm flex align-center cursor-pointer active:bg-gray-300 transition duration-300 ease w-max">
                                    <img class="rounded-full w-9 h-9 max-w-none" alt="A"
                                    src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" />
                                    <span class="flex items-center px-3 py-2">
                                    John Doe
                                    </span>
                                    <button class="bg-transparent hover focus:outline-none">
                                    </button>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-gray-500 text-sm font-semibold">
                                        150$
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>
