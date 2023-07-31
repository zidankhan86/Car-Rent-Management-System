@extends('frontend.master')
@section('content')


<style>
    body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

</style>
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">

                <form action="{{ route('user.updated',$update->id) }}" method="post">
                    @csrf
                <div class="about-text go-to">
                    <h3 class="dark-color">{{ (auth()->user()->name) }}</h3>



                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Name</label>

                                <input type="text" value="{{ (auth()->user()->name)  }}" name="name">
                            </div>
                            <div class="media">
                                <label>Phone</label>

                                <input type="tel" value="{{ (auth()->user()->phone) }}" name="phone">
                            </div>
                            <div class="media">
                                <label>Email</label>

                                <input type="text" value="{{ (auth()->user()->email) }}" name="email">
                            </div>
                            <div class="media">
                                <label>Address</label>

                                <input type="text" value="{{ (auth()->user()->address) }}" name="address">
                            </div>

                            <div class="media">
                                <label>Password</label>
                                <input type="password" name="password">
                            </div>

                            <div class="media">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation">
                            </div>

                        </div>





                    </div>

                    <div><button type="submit">Update</button></div>
                </div>
            </form>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div>
            </div>
        </div>
        <div class="row gutters-sm">

            <div class="col-sm-12 mb-3"><br><br>
                <h3 class="text-center">Booking Information</h3>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Location</th>
                        <th scope="col">Road </th>
                        <th scope="col">Order Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $key=>$item)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->road }}</td>
                            <td>{{ $item->created_at }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>


          </div>

    </div>

    </div>
</section>

@endsection
