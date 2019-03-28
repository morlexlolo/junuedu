
<footer class="site-footer py-90">
    <div class="container">
      <div class="row gap-y">
        <div class="col-12 col-md-12 col-lg-4">
          <h6 class="heading-alt text-uppercase fs-14 mb-16">
            <img src="{{ asset('assets/img/brand.png') }}" alt="logo">
          </h6>

          <p class="text-light">Copyright © 2019 <a class="text-light" href="/">JunuEdu</a>. All rights reserved.</p>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="heading-alt text-uppercase fs-14 mb-3">JunuEdu</h6>
          <div class="nav flex-column">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="{{ route('paper.index') }}">Papers</a>
            <a class="nav-link" href="{{ route('about.index') }}">About</a>
            <a class="nav-link" href="{{ route('contact.index') }}">Policies</a>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
          <h6 class="heading-alt text-uppercase fs-14 mb-3">Help</h6>
          <div class="nav flex-column">
            <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
            <a class="nav-link" href="{{ route('faq.index') }}">FAQ</a>
          </div>
        </div>


        <div class="col-12 col-md-4 col-lg-3">
          <h6 class="heading-alt text-uppercase fs-14 mb-3">Subscribe</h6>

          <form class="form-inline justify-content-center justify-content-lg-end" action="/subscribe" method="post" >
            @csrf
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="text" name="email" class="form-control" placeholder="Email Address">
              <span class="input-group-btn">
                <button class="btn btn-info" type="submit"><i class="fa fa-paper-plane"></i></button>
              </span>
            </div>
          </form>

          <hr>

          <div class="social text-center">
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          </div>
          <br>
        </div>

      </div>
    </div>
  </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/thesaas.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        @if (Session::has('subscribed'))
        toastr.success('{{ Session::get('subscribed') }}')

        @endif
    </script>
