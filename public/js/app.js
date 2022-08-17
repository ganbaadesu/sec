var data = [];
var search_data = [];
var CntrType = 'COC';
const cols = ['RefNo', 'BINo', 'CntrNo', 'CargoName', 'CneeName', 'CneePhone'];

function index(){
    var dashboard = document.getElementById('dashboard');
    if(location.pathname == "/"){
        data = [];
        const tbody = document.getElementById('dashboard_orders_tbody').childNodes;
        if(tbody.length > 1) tbody.forEach(element=>{ if(element.nodeName != '#text') data.push(element);});
        dashboard.classList.add('active');
        return;
    }
    if(location.pathname == "/user/permission"){
        var button = document.getElementById('permission_menu_operator');
        button.click();
    }
    if(location.pathname == "/history") {
        data = [];
        const history_rows = document.getElementById('logs_tbody').childNodes;
        if(history_rows.length > 1) history_rows.forEach(element=>{ if(element.nodeName != '#text') data.push(element);});
        change_date('logs_items', 'active', 0, 'history_date');
    }
    dashboard.classList.remove('active');
}

function rel_second_page(isFirst){

    var first = document.getElementById('ref_first');
    var second = document.getElementById('ref_second');
    
    if(isFirst){
        var return_sections = document.getElementsByName('return_section');
        first.style.display="none";
        second.style.display="inline-block";
        return_sections.forEach(element => {
                (CntrType == 'SOC') ? 
                element.classList.add('hidden') : 
                element.classList.remove('hidden');;
            });
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
            if(event.target == hidden || event.target == document.getElementById("center_popup") || event.target == document.getElementById('close_search_button')){
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
    const start_date = year+"."+month+"."+days;
    year = now.getFullYear();
    month = now.getUTCMonth() +1;
    days = now.getUTCDate();
    if(month<10) month = '0'+month;
    if(days<10) days = '0'+days;
    const end_date = year+"."+month+"."+days;
    document.getElementById(id_name).innerHTML = start_date+"-"+end_date;
    change_data(start_date);
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
                query+=key +'=\'' +value.value +'\'';
                continue;
            }
            query+=' and ' +key +'=\'' +value.value +'\'';
        }
    }
    $.ajax({
        method:"GET",
        url:"/api/fetch_search_data",
        data:{'query':query},
        success: function(response){
            const tbody = document.createElement('tbody');
            tbody.setAttribute('id', 'search_tbody');
            search_data=[];
            try{
                response['data'].forEach(element=>{
                    search_data.push(element);
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
            }
            catch(e){void(0);}
        },
    });
}

function search_ref_change(refType){
    const table = document.getElementById('search_table');
    try{
        table.removeChild(document.getElementById('search_tbody'));
    }
    catch(ex){
    }
    if(refType.innerHTML == 'All'){
        search();
        return;
    }
    try{
        const tbody = document.createElement('tbody');
        tbody.setAttribute('id', 'search_tbody');
        search_data.forEach(element =>{
            if(element["RefType"] == refType.innerHTML){
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
            }
            table.appendChild(tbody);
        })
    }
    catch(e){void(0);}

}

function admin_home(type, orders){
    const tbody = document.getElementById('dashboard_orders_tbody');
    while (tbody.hasChildNodes()) {
        const tr = tbody.firstChild.childNodes;
        if(tr.nodeName != '#text'){
            tr.forEach(elements=>{
                if(elements.nodeName != '#text')
                    elements.childNodes.forEach(element => {
                        if(element.nodeName == 'INPUT' && element.classList.contains('enabled_edit')){
                            element.value='';
                            element.classList.remove('enabled_edit');
                            element.classList.add('disabled_edit');
                        }
                    });
            });
        }
        tbody.removeChild(tbody.firstChild);
    }
    if(type == 'all'){
        data.forEach(element => {
            try{element.removeChild(element.childNodes[19]);}
            catch(e){void(0);}
            tbody.appendChild(element);
        });
        return;
    }
    let new_data = [];
    orders.forEach(element =>{
        if(element["RefType"].toLowerCase() == type){
            new_data.push(element["RefNo"]);
        }
    })
    data.forEach(element => {
        if(new_data.includes(element.childNodes[3].innerHTML)){

            try{element.removeChild(element.childNodes[19]);}
            catch(e){void(0);}
            tbody.appendChild(element);
        }
    });
}

function selection_changed(name, className, index, function_name=null){
    function_name;
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
function edit(el) {
    if(!el.childNodes[5].childNodes[0].classList.contains("enabled_edit")){
        var cancel_button = document.createElement('button');
        var detail_td = document.createElement('td');
        var save_button = document.createElement('button');
        cancel_button.textContent ='Cancel';
        cancel_button.classList.add('edit_cancel_button');
        cancel_button.addEventListener('click', function(){cancel_edit(this.parentNode.parentNode);})
        save_button.textContent ='Save';
        save_button.classList.add('edit_save_button');
        save_button.addEventListener('click', function(){
            save_edit($('meta[name="csrf-token"]').attr('content'), this.parentNode.parentNode);
        })
        detail_td.appendChild(cancel_button);
        detail_td.appendChild(save_button);
        el.appendChild(detail_td);
    }
    for(let i = 5; i < 14; i+=2){
        el.childNodes[i].childNodes[0].classList.remove("disabled_edit");
        el.childNodes[i].childNodes[0].classList.add("enabled_edit");
    }
}

function save_edit(_token, tr){
    var edit_data = {};
    edit_data['RefNo'] = tr.childNodes[3].innerHTML;
    tr.childNodes.forEach(elements => {
        if(elements.nodeName != '#text')
            elements.childNodes.forEach(element =>{
                if(element.nodeName == 'INPUT')
                    if(element.value != '') {
                        const name = element.getAttribute("name");
                        edit_data[name] = element.value;
                    }
            });
    });
    if(Object.keys(edit_data).length < 2) {
        alert('No changes...!');
        return;
    }
    $.ajax({
        method:"POST",
        url:"/update/ref",
        data:{"_token":_token, data:edit_data},
        success: function(response){
            if(response == "Done"){
                tr.childNodes.forEach(elements => {
                    elements.childNodes.forEach(element => {
                        if(element.nodeName == 'INPUT'){
                            element.value='';
                            if(edit_data.hasOwnProperty(element.getAttribute('name'))) element.placeholder = edit_data[element.getAttribute('name')];
                            element.classList.remove('enabled_edit');
                            element.classList.add('disabled_edit');
                        }
                    });
                });
                tr.removeChild(tr.childNodes[19]);
                alert('Амжилттай шинэчлэгдлээ');
            }
        },
    });
}

function cancel_edit(tr){
    tr.childNodes.forEach(elements => {
        elements.childNodes.forEach(element => {
            if(element.nodeName == 'INPUT' && element.classList.contains('enabled_edit')){
                element.value='';
                element.classList.remove('enabled_edit');
                element.classList.add('disabled_edit');
            }
        });
    });
    tr.removeChild(tr.childNodes[19]);
}

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
                    return;
                }
                    if(table == 'containers') 
                        CntrType = response['data'][0]['CntrType'];
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

$(function() {
    $("#history_calendar").datepicker({maxDate:new Date()});

    $(function() {
        $("#history_date").click(function() {
            $('#history_calendar').datepicker().datepicker( "show" );
        });
    });
    $(document).on('change', '#history_calendar', function(){
        var items = document.getElementsByName('logs_items');
        items.forEach(item => { if(item.classList.contains('active')) item.classList.remove('active'); });
        const diff = (new Date()).getDate() - (new Date(this.value)).getDate();
        if(diff == 0) items[0].classList.add('active');
        if(diff == 7) items[1].classList.add('active');
        if(diff == 14) items[2].classList.add('active');
        if(diff == 21) items[3].classList.add('active');
        if(diff == 30) items[4].classList.add('active');
        dates = this.value.split('/');
        const start_date = dates[2] + '.' + dates[0] + '.' +dates[1];
        const now = new Date();
        year = now.getFullYear();
        month = now.getUTCMonth() +1;
        days = now.getUTCDate();
        if(month<10) month = '0'+month;
        if(days<10) days = '0'+days;
        const end_date = year+"."+month+"."+days;
        full_date = start_date+"-"+end_date;
        document.getElementById('history_date').innerHTML = full_date;
        change_data(start_date);

    })
});

function change_data(start_date){
    var history_tbody = document.getElementById('logs_tbody');
    while (history_tbody.hasChildNodes()) {
        history_tbody.removeChild(history_tbody.firstChild);
    }
    data.forEach(element => {
        var date = element.childNodes[1].innerHTML;
        date = date.substring(0, 10).replace(/-/d, '.');
        if((new Date(date)) >= (new Date(start_date))){
            history_tbody.appendChild(element);
        }
    });
}

function show_details(data){
    const detail_form = document.getElementById('details_form');
    detail_form.classList.remove('hidden');
    window.onclick = function(event){
        $(document).keyup(function(e) {
            if (e.key === "Escape") {
                document.getElementById('details_form').classList.add('hidden');
                return;
            }
        });
    }
    for(const [key, value] of Object.entries(data)){
        try{    
            document.getElementById(key).value = value;
            document.getElementById(key).classList.add('color_black');
        }
        catch(e){}
    }
}

function close_details(){
    document.getElementById('details_form').classList.add('hidden');
}