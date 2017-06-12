@if(count($errors))

          <div class="alert alert-danger">
              <p style="color:red">We couldn't process your request</p>
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>

          </div>    
@endif       