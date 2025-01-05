
document.querySelector('.buttonLogin').addEventListener('click', function () {
    let x = document.querySelector("input[name='username']").value;
    let y = document.querySelector("input[name='password']").value;
    let u = btoa(x), p = btoa(y);
    localStorage.setItem(u, p);
});


