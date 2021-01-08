
<h2>Login form</h2>

<form action="customer" method="POST">
    {{-- @csrf --}}
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="emailid" placeholder="Enter email"/>
      
    </div>
    <br>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password"/>
    </div>
    <br>
    <button type="submit">Submit</button>
  </form>