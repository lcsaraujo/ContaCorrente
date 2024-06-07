<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de fornecedor') }}
        </h2>
    </x-slot>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 min-h-screen dark:bg-gray-800 text-center text-md text-gray-900 dark:text-gray-100">


                    <div class="float-end p-2">
                        <button type="button" name="addRow" id="addRow"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-black dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 float-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2em" viewBox="5 0 26 24">
                                <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/>
                            </svg>
                            Adicionar
                        </button>
                    </div>
                    <form action="{{ route('fornecedores.store') }}" method="POST">
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
                        <div class="mt-20 grid-cols-12 float-start text-start">

                            <table class="table-fixed flex" id="table">
                                <thead class="">
                                <tr>
                                    <th>CNPJ</th>
                                    <th>Razão Social</th>
                                    <th>Nome Fantasia</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <tr class="">
                                    <td><input type="text" name="cnpj" placeholder="CNPJ"
                                               class="text-black rounded-tl-md rounded-bl-md"/></td>

                                    <td><input type="text" name="razaoSocial" placeholder="Razão Social"
                                               class="text-black"/></td>

                                    <td><input type="text" name="nomeFantasia" placeholder="Nome Fantasia"
                                               class="text-black rounded-tr-md rounded-br-md"/></td>

                                </tr>
                                </tbody>
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
