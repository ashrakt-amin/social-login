 <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="{{ asset('js/tabler.min.js')}}" defer></script>
 <script src="{{ asset('js/demo.min.js')}}" defer></script>
 <script src="{{ asset('js/tabler.min.js')}}" defer></script>
 <script src="{{ asset('js/demo.min.js')}}" defer></script>
 <script>
     function togglePasswordVisibility(event) {
         event.preventDefault();
         var passwordInput = document.querySelector("input[name='password']");
         var icon = event.target.querySelector("svg");

         if (passwordInput.type === "password") {
             passwordInput.type = "text";
             icon.classList.add("text-primary"); // Optionally, change the icon color when the password is visible
         } else {
             passwordInput.type = "password";
             icon.classList.remove("text-primary");
         }
     }
 </script>