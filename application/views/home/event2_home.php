<style type="text/css">
         html,
        body {
          margin: 0;
          padding: 0;
        }
        
        h2,
        p {
          margin: 30px 0 0;
          padding: 0;
        }
        
        p {
          color: #18c495;
        }
        .slider {
          max-width: 1000px;
          width: 90%;
          margin: 15px auto;
          background: #ececec;
          border-radius: 5px;
          padding: 20px 0;
          box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
          /*h v b s*/
        }
        
        .slick-slider button {
          display: none!important;
        }
        
        .slick-slide {
          color: #333;
          padding: 40px 0;
          font-size: 1.25em;
          font-family: "Verdana";
          text-align: center;
          pointer-events: none;
        }
        
        .slick-slide .desc {
          opacity: 0;
        }
        
        .slick-slide .desc > * {
          transition: all 900ms ease;
        }
        
        .slick-slide .desc h2 {
          position: relative;
          left: 50px;
          line-height: 1;
        }
        
        .slick-slide .desc p {
          position: relative;
          top: 50px;
          opacity: 0;
        }
        
        .slick-slide img {
        

  width: 30%;
        }
        
        .slick-prev:before,
        .slick-next:before {
          color: black;
        }
        
        .slick-dots {
          text-align: center;
        }
        
        .slick-dots li {
          display: inline-block;
          padding: 1px;
          background: #ccc;
          margin: 10px 5px;
          width: 40px;
          height: 5px;
        }
        
        .slick-dots li.slick-active {
          background: #18c495;
        }
        
        .slick-dots button {
          display: none;
        }
        
        .slick-slide:nth-child(odd) {
          /* background: blue;*/
        }
        
        .slick-slide {
          opacity: 0.2;
          transition: all 300ms ease;
        }
        
        .slick-current {
          opacity: 1;
          transform: scale(1.1);
        }
        
        .slick-current .desc {
          opacity: 1;
        }
        
        .slick-current .desc h2 {
          left: 0;
        }
        
        .slick-current .desc p {
          top: 0;
          opacity: 1;
        }
        
       
</style>
<section class="featured_works row" data-stellar-background-ratio="0.3" style=" background-color: rgb(253, 245, 8);">
        <div class="tittle wow fadeInUp">
            <h2 style="text-transform: capitalize;">Sampang in Action</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>


        <div class="slider">
            <div>
    <img src="http://baronwatts.com/tuts/swipe/4.png">
    <div class="desc">
      <h2>BOSE SoundLink II</h2>
      <p>$299.99 - $329.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

  <div>
    <img src="http://baronwatts.com/tuts/swipe/5.png">
    <div class="desc">
      <h2>BOSE QC35</h2>
      <p>$289.99 - $299.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

 
  </div>
</div>
</section>