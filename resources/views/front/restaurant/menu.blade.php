@extends('front.layouts.main')

@section('section')

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Foodies Menu</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
        <div class="container py-md-4 py-3">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-filter" aria-hidden="true"></i> Filtrlə</button>
                <div id="myDropdown" class="dropdown-content">
                  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            @foreach($tags as $tag)
                  <a href="{{ url('restaurant/' . Request::segment(2) . '/foods/' . $tag->id)}}">{{ $tag->tag }}</a>
            @endforeach
                </div>
              </div>
            <br>
            <hr>
            <div class="row menu-body">
                <!-- Section starts: Breakfast -->
                @foreach ($foods as $food)
                <div class="col-md-6 menu-section">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="{{ $food->image }}" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>{{ $food->food }}</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>{{ $food->price }}</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>{{ $food->tags->tag }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>

                @endforeach
                <!-- Section ends: Breakfast -->
            </div>
        </div>
    </div>
</div>
<!-- //menu -->
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
    </script>

@endsection
