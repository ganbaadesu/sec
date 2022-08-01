function rel_second_page(isFirst){

    var first = document.getElementById('ref_first');
    var second = document.getElementById('ref_second');
    
    if(isFirst){
        first.style.display="none";
        second.style.display="inline-block";
        return;
    }

    first.style.display="inline-block";
    second.style.display="none";

}

function search_form(){
    var hidden = document.getElementById("hidden_form");
    if(hidden.classList.contains("hidden")){
        hidden.classList.remove("hidden");
        return;
    }
    hidden.classList.add("hidden");
}

function change_date(name, class_name, day, id_name){
        function subtractDays(numOfDays, date=new Date()) {
            date.setDate(date.getDate() - numOfDays);
            return date;
        }
    selection_changed(name, class_name, parseInt(day/7));
    var items = document.getElementsByName(name);
    if(name == 'search_date_choice'){
        items.forEach(item => { if(!item.classList.contains('search-date-choice')) item.classList.add('search-date-choice'); });
        items[day/7].classList.remove('search-date-choice');
    }
    const now = new Date();
    const result = subtractDays(day);
    let year, month, days;
    year = result.getFullYear();
    month = result.getUTCMonth() +1;
    days = result.getUTCDate();
    if(month<10) month = '0'+month;
    if(days<10) days = '0'+days;
    const start_date = year+"-"+month+"-"+days;
    year = now.getFullYear();
    month = now.getUTCMonth() +1;
    days = now.getUTCDate();
    if(month<10) month = '0'+month;
    if(days<10) days = '0'+days;
    const end_date = year+"-"+month+"-"+days;
    document.getElementById(id_name).innerHTML = start_date.replace(/-/g,'.')+"-"+end_date.replace(/-/g,'.');
    console.log(start_date);
}

function search(){
    console.log('search');
}

function set_selected(){
    change_date('search_date_choice', 'active',0, 'search_date');
    var dashboard = document.getElementById('dashboard');
    if(location.pathname == "/"){
        dashboard.classList.add('active');
        return;
    }
    dashboard.classList.remove('active');
    if(location.pathname == "/user/permission"){
        var button = document.getElementById('permission_menu_operator');
        button.click();
    }
    if(location.pathname == "/history") change_date('logs_items', 'active', 0, 'history_date');
}
function selection_changed(name, className, index){
    var items = document.getElementsByName(name);
    items.forEach(item => { if(item.classList.contains(className)) item.classList.remove(className); });
    items[index].classList.add(className);
}
function set_usertype(){
    var items = document.getElementsByName('permission_usertype');
    const usertypes = ['operator', 'account', 'cnee', 'shipper'];
    var usertype=document.getElementById("usertype");
    for(var i = 0; i < 4; i++){
        if(items[i].classList.contains('active')) usertype.value = usertypes[i];
    }
}
function check_permissions(permissions){
    set_usertype();
    var items = document.getElementsByName('CheckBox_Permissions[]');
    items.forEach(item=> {item.checked=false;});
    permissions.forEach(item => {
        var ChBox = document.getElementById(item);
        ChBox.checked = true;
    });
}
const edit = () => (document.getElementsByName("edit[]")).forEach(
    item =>{item.classList.remove("disabled_edit");}
);

const check_data = (table, column, value) => {
    if(value != ''){
        $.ajax({
            method:"GET",
            url:"/api/check_data",
            data:{"table":table, "column":column, "value":value},
            success: function(response){
                if(response["data"]==null){
                    if(table == 'containers'){
                        alert("Контайнар олдсонгүй, дахин шалгана уу...?");
                        return;
                    }
                    alert("Тээврийн хэрэгсэл олдсонгүй, дахин шалгана уу...?");
                }
            },
        });
    }
}