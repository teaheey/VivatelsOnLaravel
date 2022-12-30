@extends('layouts.app-master')

@section('content')
    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="custom_heading-container">
        <h3 class=" ">
        {{__('messages.contactH3')}}
        </h3>
      </div>
      <div class="container layout_padding2-top">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="https://formspree.io/f/mlevdljv" method="POST">
              <div>
                <input type="text" name="name" placeholder="{{__('messages.contact-name')}}" required>
              </div>
              <div>
                <input type="email" name="email" placeholder="{{__('messages.contact-email')}}" required>
              </div>
              <div>
                <input type="text" name="phone" placeholder="{{__('messages.contact-phone')}}" required>
              </div>
              
              <div>
                <select name="productType">
                  <option value="Produkts" disabled selected>{{__('messages.contact-product')}}</option>
                  <option value="Durvis">{{__('messages.doors')}}</option>
                  <option value="Logi">{{__('messages.windows')}}</option>
                  <option value="Kāpnes">{{__('messages.steps')}}</option>
                  <option value="Virtuve">{{__('messages.kitchen')}}</option>
                  <option value="Citas mēbeles">{{__('messages.other')}}</option>
                </select>
              </div>
              <div>
                <textarea type="text" name="content" placeholder="{{__('messages.contact-msg')}}" required></textarea>
              </div>
              <div class="d-flex justify-content-center">
                <button id="#button" type="submit">{{__('messages.send')}}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->

@endsection