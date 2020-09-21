AOS.init();

let btnLogout = document.querySelector('#btn-logout');
if (btnLogout) {
    btnLogout.onclick = function () {
        document.querySelector('#logout-form').submit();
    };
}

let inputSearch = document.getElementById('inputSearchCompany');
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
                        resultSearch.innerHTML = `<a id="search" href="${ companyInfoRoute.replace('companyId', result.id) }">${ result.name }</a>`;
                    }
                })
            },
            error: function (err) {
                //
            }
        })
    },500)
});
