import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.onload=function (){
    let addRow = document.getElementById("addRow");
    let i = 0;
    addRow.onclick = function (){
        ++i;
        $('#table').append(
            `<tr>
                 <td><input type="text" name="nameForn`+i+`" placeholder="Fornecedor" class="text-black p-2 rounded-tl-md rounded-bl-md"/></td>

                 <td><input type="text" name="desc`+i+`" placeholder="Descrição" class="text-black p-2"/></td>

                 <td><input type="number" name="valor`+i+`" id="valor" placeholder="Valor" class="text-black p-2 rounded-tr-md rounded-br-md"></td>

                 <td class="flex float-start mx-4 mt-4"><input type="radio" name="(conta`+i+`)" value="Debito" id="debito" placeholder="Débito" class="valor text-black p-2"/></td>

                 <td class="flex float-end mx-4 mt-4"><input type="radio" name="(conta`+i+`)" value="Credito" id="credito" placeholder="Crédito" class="valor text-black p-2"/></td>

                 <td><div class="float-end p-2">
                         <button type="button" name="remove" id="remove" class="remove-table-row inline-flex items-center px-4 py-2 bg-red-700 dark:bg-red border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-red-200 dark:hover:bg-red focus:bg-gray-700 dark:focus:bg-red-200 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none transition ease-in-out duration-500 float-end">
                             <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="1.5em" viewBox="5 0 24 24"><path fill="currentColor" d="m8.4 17l3.6-3.6l3.6 3.6l1.4-1.4l-3.6-3.6L17 8.4L15.6 7L12 10.6L8.4 7L7 8.4l3.6 3.6L7 15.6zm3.6 5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg>
                             Remove
                         </button>
                     </div>
                 </td>
            </tr>`);

        $(document).on('click', 'valor:radio', function(){
            let contaSelecionada = 0;
            contaSelecionada = $_GET['conta'];

        })
    }

    $(document).on('click', '.remove-table-row', function(){
        $(this).parents('tr').remove();
    });
}


//dark mode button
// var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
// var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// if (
//     localStorage.getItem("color-theme") === "dark" ||
//     (!("color-theme" in localStorage) &&
//         window.matchMedia("(prefers-color-scheme: dark)").matches)
// ) {
//     themeToggleLightIcon.classList.remove("hidden");
// } else {
//     themeToggleDarkIcon.classList.remove("hidden");
// }

// var themeToggleBtn = document.getElementById("theme-toggle");

// themeToggleBtn.addEventListener("click", function () {
//     themeToggleDarkIcon.classList.toggle("hidden");
//     themeToggleLightIcon.classList.toggle("hidden");

//     if (localStorage.getItem("color-theme")) {
//         if (localStorage.getItem("color-theme") === "light") {
//             document.documentElement.classList.add("dark");
//             localStorage.setItem("color-theme", "dark");
//         } else {
//             document.documentElement.classList.remove("dark");
//             localStorage.setItem("color-theme", "light");
//         }
//     } else {
//         if (document.documentElement.classList.contains("dark")) {
//             document.documentElement.classList.remove("dark");
//             localStorage.setItem("color-theme", "light");
//         } else {
//             document.documentElement.classList.add("dark");
//             localStorage.setItem("color-theme", "dark");
//         }
//     }
// });
