  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  {{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> --}}
  {{-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> --}}

  <script>
    // For Making Header Responsive
const menu_btn = document.querySelector(".menu-btn");
const close_btn = document.querySelector(".close-btn");
const menu = document.querySelector(".menu");
const drawer = menu.querySelector(".drawer");
const blank = menu.querySelector(".blank");
const body = document.querySelector("body");
const close = () => {
menu.classList.remove("blur");
drawer.classList.remove("drawer-visible");
body.classList.remove("body");
};

menu_btn.addEventListener("click", (e) => {
menu.classList.add("blur");
drawer.classList.add("drawer-visible");
body.classList.add("body");
});

close_btn.addEventListener("click", (e) => {
close();
});

blank.addEventListener("click", (e) => {
close();
});

Array.from(drawer.querySelectorAll("a")).forEach((element) => {
element.addEventListener("click", () => {
close();
});
});

 </script>
