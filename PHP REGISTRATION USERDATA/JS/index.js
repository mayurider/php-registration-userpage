var target = document.getElementById("dynamic_field");

var additem = `<li><input type="text" name="field_name[]" value="" placeholder="Give Social Name" class="input_field"><input type="text" name="field_name1[]" value="" placeholder="Give Social Link" class="input_field">
<a href="javascript:void(0);" class="remove_btn" onclick="removeitm()" title="remove field"><i class="fa fa-minus-circle" style="font-size:20px;" id="add"></i></a></li>`;



function additemfn(){

    target.insertAdjacentHTML("beforeend",additem);
}

function removeitm(){
    target.removeChild(target.lastElementChild);
}