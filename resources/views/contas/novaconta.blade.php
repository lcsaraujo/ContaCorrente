<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nova Conta') }}
        </h2>
    </x-slot>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 h-full dark:bg-gray-800 text-center text-md text-gray-900 dark:text-gray-100">


                    <div class="float-end p-2">
                        <button type="button" name="addRow" id="addRow"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-black dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 float-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2em" viewBox="5 0 26 24">
                                <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/>
                            </svg>
                            Adicionar
                        </button>
                    </div>
                    <form action="{{ route('conta.store') }}" method="POST">
                        @csrf

                        @if($errors->any())
                        <div class="">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if (Session::has('success'))
                        <div>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif
                        <div class="mt-20 grid-cols-5 float-start text-start">

                            <table class="table-fixed flex space-x-4 " id="table">
                                <tr>
                                    <th>Fornecedor</th>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Débito | Crédito</th>
                                    <th>Ação</th>
                                </tr>
                                <tr class="px-4">
                                    <td><input type="text" name="nameForn" placeholder="Fornecedor"
                                               class="text-black p-2 rounded-tl-md rounded-bl-md"/></td>

                                    <td><input type="text" name="desc" placeholder="Descrição" class="text-black p-2"/>
                                    </td>

                                    <td><input type="number" name="$valor" id="credito" placeholder="Valor"
                                               class="text-black p-2 rounded-tr-md rounded-br-md"></td>

                                    <td class="flex float-start mx-4 mt-4"><input type="radio" name="conta"
                                                                                  value="Debito" id="debito"
                                                                                  placeholder="Débito"
                                                                                  class="text-black p-2"/></td>

                                    <td class="flex float-end mx-4 mt-4"><input type="radio" name="conta"
                                                                                value="Credito" id="credito"
                                                                                placeholder="Crédito"
                                                                                class="text-black p-2"/></td>

                                    <td>
                                        <div class="float-end p-2">
                                            <button type="button" name="remove" id="remove"
                                                    class="inline-flex items-center px-4 py-2 bg-red-700 dark:bg-red border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-red-200 dark:hover:bg-red focus:bg-gray-700 dark:focus:bg-red-200 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none transition ease-in-out duration-500 float-end">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="1.5em"
                                                     viewBox="5 0 24 24">
                                                    <path fill="currentColor"
                                                          d="m8.4 17l3.6-3.6l3.6 3.6l1.4-1.4l-3.6-3.6L17 8.4L15.6 7L12 10.6L8.4 7L7 8.4l3.6 3.6L7 15.6zm3.6 5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/>
                                                </svg>
                                                {{ __('Remove')}}
                                            </button>
                                        </div>
                                    </td>


                                </tr>
                            </table>
                            <div class="float-end p-2">
                                <button type="submit" name="saveAccount" id="saveAccount"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white dark:text-black uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 float-end">
                                    <x-fluentui-save-20-o class="size-4 "/>
                                    Salvar
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>


