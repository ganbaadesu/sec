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
function set_selected(){
    var dashboard = document.getElementById('dashboard');
    if(location.pathname == "/"){
        dashboard.classList.add('active');
        return;
    }
    dashboard.classList.remove('active');
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