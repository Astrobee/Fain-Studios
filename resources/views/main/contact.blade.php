<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted" style="color:white">Please feel free to send as an email.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                <div class="form-group container" style="font-family: 'El Messiri', sans-serif; font-size: 16px; padding-left: 30%">
    <div class="row">
        <div class="col-md-8">

<form action="/visitor/mail_us" method="POST"  role="form">

{{ csrf_field() }}

        <div class="form-group">
            <label for="name" style="color: lightblue">Name:</label>
            <input type="text" name="name" id="name" class="form-control" style="font-size: 18px">
        </div>

        <div class="form-group">
            <label for="email" style="color: lightblue">Email:</label>
            <input type="email" name="email" id="email" class="form-control" style="font-size: 18px">
        </div>

         <div class="form-group">
            <label for="message" style="color: lightblue">Messasge:</label>
           <textarea class="form-control" id="message" style="font-size: 18px" name="message"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope" style="color: blue;" id="sendMess"></span> Send Message</button>
            <a href="/"><button type="button" class="btn btn-link"><span class="glyphicon glyphicon-remove" style="color: red;"></span> Cancel</button></a>
        </div>

@include('errors.errors')
</form>



    </div>

</div>

</div>

                </div>
            </div>
        </div>
    </section>