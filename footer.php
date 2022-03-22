<div class="container-fluid bg-dark gap-3 py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-logo mb-3"></div>
        <p class="text-white">
          My.Organics is an organic, sustainable and cruelty free haircare
          and styling brand. The range of exclusive products is m mt-5ade
          from certified ingredients that are grown using organic and
          bio-dynamic farming techniques.
        </p>
      </div>
      <div class="col-md-4 text-white">
        <div>
          <h3>LINKS</h3>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="link-light text-decoration-none">Light link</a>
            </li>
            <li>
              <a href="#" class="link-light text-decoration-none">Light link</a>
            </li>
            <li>
              <a href="#" class="link-light text-decoration-none">Light link</a>
            </li>
            <li>
              <a href="#" class="link-light text-decoration-none">Light link</a>
            </li>
            <li>
              <a href="#" class="link-light text-decoration-none">Light link</a>
            </li>
            <li>
              <a href="#" class="link-light text-decoration-none">Light link</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 text-white">
        <h3>SIGN UP AND SAVE</h3>
        <p>
          Subscribe to get special offers, free giveaways, and
          once-in-a-lifetime deals.
        </p>
        <input class="form-control" type="text" placeholder="Prenumeruok" />
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center text-white mt-2 mb-2">
        © 2022 My Organics UK
      </div>
    </div>
  </div>
</div>

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>


<script>
  window.onload = function() {
    jQuery(".carousel .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      center: true,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 3,
        },
      },
    });
    jQuery(".hero-carousel .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      center: true,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });
  };
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>