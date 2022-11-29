import './bootstrap';
(function(){
    var btn = document.querySelector('.profil-logout')
    var body = document.querySelector('.close');
    btn.addEventListener('click',function(){
        var div = document.querySelector('.logout-menu')
        var divProfil = document.querySelector('.div-pro')
        divProfil.classList.add('hiden-div')
        div.classList.add('div-logout-show')

    })
    body.addEventListener('click',function(){
        var div = document.querySelector('.logout-menu')
        var divProfil = document.querySelector('.div-pro')
        divProfil.classList.remove('hiden-div')
        div.classList.remove('div-logout-show')
    })
})()
