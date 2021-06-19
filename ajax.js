try {
    ajax = new XMLHttpRequest(); 
    } catch(e) { ajax = 0; }

function Delete(id)
{
    ajax.open('GET',`delete.php/?id=`+id);
    ajax.send();
    location.reload();  
}

function Promote(id)
{
    let item = document.getElementById(String(id));
    let role = document.getElementById(String(id)+"role");
    if(item.innerText == "Promote"){
        item.innerText = "Demote";
        role.innerText = "admin";
        ajax.open('GET',`promote.php/?id=`+id);
    }
    else{
        item.innerText = "Promote";
        role.innerText = "user";
        ajax.open('GET',`demote.php/?id=`+id);
    }

    ajax.send();
}
