// A J A X   S C R I P T


// Ajax function
async function ajax(method, path, items_to_send, execute) 
{
    const xhr = new XMLHttpRequest();

    xhr.onload = () => {
        if (xhr.status === 200) 
        {
            execute(xhr);
        }
    }

    xhr.open(method, path + ".php", true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")

    let send_str = ''

    for (i = 0; i < items_to_send.length; i++) {
        send_str += items_to_send[i][0] + '=' + items_to_send[i][1];

        if (i != items_to_send.length - 1) {
            send_str += '&'
        }
    }

    xhr.send(send_str)
}