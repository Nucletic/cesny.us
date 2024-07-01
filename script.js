MenuOpenBtn = document.getElementById("mnu_opn_btn")
MenuCloseBtn = document.getElementById("mnu_cls_btn")
MenuBar = document.getElementById("menu_bar")

MenuOpenBtn.addEventListener('click', function () {
    MenuBar.style.right = "-1%"
});
MenuCloseBtn.addEventListener('click', function () {
    MenuBar.style.right = "-100%"
});

srvcs_cvrn_dv = document.getElementById("srvcs_cvrn_dv")
srvcs_cvrn = document.getElementById("srvcs_cvrn")
prjts_cvrn_dv = document.getElementById("prjts_cvrn_dv")
prjts_cvrn = document.getElementById("prjts_cvrn")
aws_cvrn_dv = document.getElementById("aws_cvrn_dv")
aws_cvrn = document.getElementById("aws_cvrn")


srvcs_cvrn_dv.addEventListener('click', function () {
    srvcs_cvrn_dv.classList.toggle('srvcs_cvr_dv');
    srvcs_cvrn.classList.toggle('srvcs_cvrn')
});
prjts_cvrn_dv.addEventListener('click', function () {
    prjts_cvrn_dv.classList.toggle('prjts_cvrn_dv');
    prjts_cvrn.classList.toggle('srvcs_cvrn')
});
aws_cvrn_dv.addEventListener('click', function () {
    aws_cvrn_dv.classList.toggle('aws_cvrn_dv');
    aws_cvrn.classList.toggle('srvcs_cvrn')
});

