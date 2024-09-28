function success(msg){
    Toastify({
        text:msg,
        gravity: "top",
        position: "left",
        style: {
          background: "linear-gradient(to right, #00b09b, #96c93d)",
        }
      }).showToast();
}

function error(msg){
    Toastify({
        text:msg,
        gravity: "top",
        position: "left",
        style: {
          background:"red",
        }
      }).showToast();
}
