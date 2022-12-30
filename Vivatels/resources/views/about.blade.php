@extends('layouts.app-master')

@section('content')
  
    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
          {{__('messages.nav-about')}}
          </h3>
        </div>
        <p class="layout_padding2-top">
        {{__('messages.about-p1-1')}}<br>
        {{__('messages.about-p1-2')}}<br>
        {{__('messages.about-p1-3')}}<br>
        {{__('messages.about-p1-4')}}<br>
        {{__('messages.about-p1-5')}}<br>
        </p>
        <div class="img-box layout_padding2">
          <img src="images/producer.jpg" alt="">
        </div>
        <h4>
        {{__('messages.about-p2-h4')}}<br>
        </h4>
        <p class="layout_padding2-bottom">
        {{__('messages.about-p2-1')}}<br>
        {{__('messages.about-p2-2')}}<br>

        </p>
      

    </section>

    <!-- end about section -->
  @endsection