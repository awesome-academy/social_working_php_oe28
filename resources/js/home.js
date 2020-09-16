AOS.init();

let btnLogout = document.querySelector('#btn-logout');
if (btnLogout) {
    btnLogout.onclick = function () {
        document.querySelector('#logout-form').submit();
    };
}

let inputSearch = document.getElementById('inputSearchCompany');
console.log(inputSearch);
let resultSearch = document.getElementById('resultSearch');
inputSearch.addEventListener('keyup', () => {
    setTimeout(() => {
        $.ajax({
            type: 'get',
            url: '/getCompaniesFromSearch',
            data: {
                data : inputSearch.value,
            },
            success: function (data) {
                data.map(result => {
                    if (inputSearch.value === '') {
                        resultSearch.innerHTML = '';
                    } else {
                        resultSearch.innerHTML = `<a href="#">${result.name}</a>`;
                    }
                })
            },
            error: function (err) {
                //
            }
        })
    },500)
});
