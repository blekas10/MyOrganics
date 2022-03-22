<?php include_once 'header.php' ?>



<div class="container justify-content-center p-5">
  <div class="row">

    <div class="col-lg-7">
      <div class="image-wrapper position-relative h-100 w-100">
        <div class="levander-img"></div>

      </div>
    </div>
    <div class="col-lg-5 py-5">
      <h2 class="sustainable-products">
        WHY CHOOSE MY.ORGANICS?
      </h2>
      <p>
        61% of millennials say they would pay more for eco-friendly products*
      </p>
      <!-- <strong>7 High-Performing Care and Styling Ranges</strong> -->
      <p>
        Specially formulated ranges to solve all your clients’ hair and scalp complaints: Hydrating, Thickening, Purifying, Restructuring, After Colour, Resurrection and Keratin Lines.
      </p>
      <!-- <strong>70 Shade Certified Organic Colour Line</strong> -->
      <p>
        42% of consumers are looking for certification logos to help them choose organic**
      </p>
    </div>
  </div>
</div>



<div class="container text-center tapk-partneriu">
  <div class="row">
    <div class="col-sm-12 ">
      <p class="mb-3">Be the difference your clients want to see and find out how My.Organics can help your salon and the planet. Simply fill out the form below.</p>

    </div>
  </div>
</div>



<div class="container pt-2 pb-5">
  <form action="action_page.php">

    <label for="fname">Vardas</label>
    <input type="text" id="fname" name="firstname" placeholder="Jūsų vardas">

    <label for="country">Užimamos pareigos </label>
    <select id="country" name="country">
      <option value="australia">Kirpėjas</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="lname">El.Pašto adresas</label>
    <input type="text" id="lname" name="lastname" placeholder="El.pašto adresas">

    <label for="lname">Tel. Numeris</label>
    <input type="text" id="lname" name="lastname" placeholder="Tel. Numeris">



    <label for="subject">Jūsų žinutė</label>
    <textarea id="subject" name="subject" placeholder="Parašykite kažką"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>



<?php include_once 'footer.php' ?>