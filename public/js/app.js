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
        window.onclick = function(event){
            if(event.target == hidden || event.target == document.getElementById("center_popup")){
                hidden.classList.add("hidden");
                return;
            }
            $(document).keyup(function(e) {
                if (e.key === "Escape") {
                    hidden.classList.add("hidden");
                    return;
               }
           });
        }
    }
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
}

function search(){

    const table = document.getElementById('search_table');
    try{
        table.removeChild(document.getElementById('search_tbody'));
    }
    catch(ex){
    }

    const RefNo = document.getElementById('SearchRefNo');
    const BINo = document.getElementById('SearchBINo');
    const CntrNo = document.getElementById('SearchCntrNo');
    const VehicleNo = document.getElementById('SearchVehicleNo');

    const elements = {'RefNo':RefNo, 'BINo':BINo, 'CntrNo':CntrNo, 'VehicleNo':VehicleNo};

    var query = "";

    for(const [key, value] of Object.entries(elements)){
        if(value.value!=""){
            if(query==""){
                query+=key +'=' +value.value;
                continue;
            }
            query+=' and ' +key +'=' +value.value;
        }
    }
    const cols = ['RefNo', 'BINo', 'CntrNo', 'CargoName', 'CneeName', 'CneePhone'];
    $.ajax({
        method:"GET",
        url:"/api/fetch_search_data",
        data:{'query':query},
        success: function(response){
            const tbody = document.createElement('tbody');
            tbody.setAttribute('id', 'search_tbody');
            response['data'].forEach(element=>{
                const tr = document.createElement("tr");
                for(let i = 0; i < 7; i++){
                    const td = document.createElement("td");
                    if(i==6){
                        const label = document.createElement('label');
                        label.classList.add('badge');
                        if(element['status'] == 'Success') label.classList.add('badge-success');
                        if(element['status'] == 'Progressing') label.classList.add('badge-warning');
                        if(element['status'] == 'Pending') label.classList.add('badge-danger');
                        const txt = document.createTextNode(element['status']);
                        label.appendChild(txt);
                        td.appendChild(label);
                        tr.appendChild(td);
                        continue;
                    }
                    const txt = document.createTextNode(element[cols[i]]);
                    td.appendChild(txt);
                    tr.appendChild(td);
                }
                tbody.appendChild(tr);
            });
            table.appendChild(tbody);
        },
    });
}

function set_selected(){
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
    var return_sections = document.getElementsByName('return_section');
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
                    return;
                }
                return_sections.forEach(element => {
                        (table == 'containers' || response['data'][0]['CntrType'] == 'SOC') ? 
                        element.classList.add('hidden') : 
                        element.classList.remove('hidden');;
                    });
            },
        });
        return;
    };
    return_sections.forEach(element => {
        element.classList.remove('hidden');
    });
}

const cntrChange = (value) =>{
    if(value=="SOC"){
        document.getElementById('CntrOwner').disabled = true;
        document.getElementById('CntrOwner').value = "SBL";
        return;
    }
    document.getElementById('CntrOwner').disabled = false;
    document.getElementById('CntrOwner').value = "";
}