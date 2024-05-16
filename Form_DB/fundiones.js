function show(mensaje,type) {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    }
  });
  Toast.fire({
    icon: type,
    title: mensaje
  });
}


function redirectToPage(){
  window.location.href = "http://localhost:8000/Form_DB/index.php";
}

