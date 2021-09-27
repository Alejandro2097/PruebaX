const init = () => {
    for(let i = 0;  i < data.length; i++){
        $("#alm").append('<tr>' + 
        '<th scope="row">'+ [i +1] +'</th>' +
        '<td align="center" style="dislay: none;">' + data[i].name + '</td>'+
        '<td align="center" style="dislay: none;">' + data[i].email + '</td>'+
        '<td align="center" style="dislay: none;">' + data[i].position + '</td>'+
        '<td align="center" style="dislay: none;">' + data[i].salary + '</td>'+'</tr>');
    }
}