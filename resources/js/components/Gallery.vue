<template>
<section class="gallery mt-5">
    <div class="container">
      <div class="row">
        <h2>Explore Products Gallery</h2>
        <p>Collection widgets specialize in displaying many elements of the same type, such as a collection <br>
          of pictures from a collection of articles.</p>



        <div class="col-md-4 mt-5 mb-5">
          <div class="card" style="width: 22rem;">
            <img src="https://i.ibb.co/Qnzd2Wn/image-gallery-1.png" height="300px" width="350px" class="p-3">
            <div class="card-body">
              <p class="float-start p-1">Games <span>749</span></p>
              <p class="float-end p-1 fw-light">View All<i class="fa-light fa-arrow-right"></i></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5 mb-5">
          <div class="card" style="width: 22rem;">
            <img src="https://i.ibb.co/80syR0h/image-gallery.png" height="300px" width="350px" class="p-3">
            <div class="card-body">
              <p class="float-start p-1">Photograpy <span>749</span></p>
              <p class="float-end p-1 fw-light">View All</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5 mb-5">
          <div class="card" style="width: 22rem;">
            <img src="https://i.ibb.co/M1qd0c3/image-gallery-3.png" height="300px" width="350px" class="p-3">
            <div class="card-body">
              <p class="float-start p-1">Artwork <span>749</span></p>
              <p class="float-end p-1 fw-light">View All</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
    export default {

    }
</script>

<style scoped>
.gallery h2{
    font-family: Poppins;
    font-size: 26px;
    font-weight: 600;
    line-height: 39px;
    letter-spacing: 0px;
    text-align: center;
    padding-top: 30px;
    color: #734434;
}
.gallery p {
    font-family: Poppins;
    font-size: 15px;
    font-weight: 400;
    line-height: 21px;
    letter-spacing: 0px;
    text-align: center;
}
</style>
