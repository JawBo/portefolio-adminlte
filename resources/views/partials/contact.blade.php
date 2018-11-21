<section class="container" id="contactSection">
  <section class="bg-dark p-5 text-center text-light m-5 " style="font-size:20px;border-radius:10%">
  <h1 style="padding: 5px ; color: yellow; font-weight: bolder; text-shadow: -1px 1px 3px black;" >Contacts</h1>
  @if ($errors->any())
  <div class="alert alert-danger" >
      <ul style="list-style-type:none;">
          @foreach ($errors->all() as $error)
              <li id="errorContact">{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <form method="post" action="/contact">
    @csrf
      <div class="form-group">
        <label> Tell Me Your Name </label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="" aria-describedby="" placeholder="Your Name ">
      </div>
      <div class="form-group">
        <label >What's Your Email Adress</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="" placeholder="Your Email ">
      </div>
      <div class="">
        <label > What's Your Message For Me</label>
        <textarea class="form-control" name="message" value="{{old('message')}}" placeholder="Your Message (max: 500 caractères)" cols="40" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-primary p-2 m-3">Submit</button>
    </form>
  </section>
</section>