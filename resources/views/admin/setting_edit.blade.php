@extends('layouts.admin')

@section('title','Ayarları Düzenle')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ayarları Düzenle</h5>
                    <p class="place">Ayarları Düzenleme Sayfasındasınız</p>
                </div>
                <div class="card-body">

                    <div class="container">

                   <div style="width:200px; height: 2500px;">
                       <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                           @csrf
                       <table>

                           <tr><h4></h4> <input style="width: 600px" id="id" value="{{$data->id}}" type="hidden" name="id" placeholder="Id"/></tr>
                           <tr><h4>Title:</h4> <input style="width: 600px" id="title" value="{{$data->title}}" type="text" name="title" placeholder="Title"/></tr>
                           <tr><h4>Keywords: </h4><input style="width: 600px" id="keywords" value="{{$data->keywords}}" type="text" name="keywords" placeholder="Keywords"/></tr>
                           <tr><h4>Description: </h4><input style="width: 600px" id="description" value="{{$data->description}}" type="text" name="description" placeholder="Description"/></tr>
                           <tr><h4>Company: </h4><input style="width: 600px" id="company" value="{{$data->company}}" type="text" name="company" placeholder="company"/></tr>
                           <tr><h4>Address: </h4><input style="width: 600px" id="address" value="{{$data->address}}" type="text" name="address" placeholder="address"/></tr>
                           <tr><h4>Phone: </h4><input style="width: 600px" id="phone" value="{{$data->phone}}" type="number" name="phone" placeholder="phone"/></tr>
                           <tr><h4>Fax: </h4><input style="width: 600px" id="fax" value="{{$data->fax}}" type="text" name="fax" placeholder="fax"/></tr>
                           <tr><h4>Email: </h4><input style="width: 600px" id="email" value="{{$data->email}}" type="email" name="email" placeholder="email"/></tr>
                           <tr><h4>Smtpserver: </h4><input style="width: 600px" id="smtpserver" value="{{$data->smtpserver}}" type="text" name="smtpserver" placeholder="smtpserver"/></tr>
                           <tr><h4>Smtpemail: </h4><input style="width: 600px" id="smtpemail" value="{{$data->smtpemail}}" type="text" name="smtpemail" placeholder="smtpemail"/></tr>
                           <tr><h4>Smtppassword: </h4><input style="width: 600px" id="smtppassword" value="{{$data->smtppassword}}" type="password" name="smtppassword" placeholder="smtppassword"/></tr>
                           <tr><h4>Smtpport: </h4><input style="width: 600px" id="smtpport" value="{{$data->smtpport}}" type="text" name="smtpport" placeholder="smtpport"/></tr>
                           <tr><h4>Facebook: </h4><input style="width: 600px" id="facebook" value="{{$data->facebook}}" type="text" name="facebook" placeholder="facebook"/></tr>
                           <tr><h4>Twitter: </h4><input style="width: 600px" id="twitter" value="{{$data->twitter}}" type="text" name="twitter" placeholder="twitter"/></tr>
                           <tr><h4>Instagram: </h4><input style="width: 600px" id="instagram" value="{{$data->instagram}}" type="text" name="instagram" placeholder="instagram"/></tr>
                           <tr><h4>Youtube: </h4><input style="width: 600px" id="youtube" value="{{$data->youtube}}" type="text" name="youtube" placeholder="youtube"/></tr>
                           <tr><h4>About Us: </h4><input style="width: 600px" id="aboutus" value="{{$data->aboutus}}" type="text" name="aboutus" placeholder="aboutus"/></tr>
                           <tr><h4>Contact: </h4><input style="width: 600px" id="contact" value="{{$data->contact}}" type="text" name="contact" placeholder="contact"/></tr>
                           <tr><h4>References: </h4><input style="width: 600px" id="references" value="{{$data->references}}" type="text" name="references" placeholder="references"/></tr>

                           <tr><label for="status"><h4>Status:</h4></label>

                               <select name="status" id="status" style="width: 600px">
                                   <option selected="selected">{{$data->status}}</option>
                                   <option value="true">True</option>
                                   <option value="false">False</option>

                               </select></tr><br><br>
                           <tr><button type="submit" style="color:#95999c; background-color: #4a5568; width: 150px;">Düzenle</button></tr>
                       </table>
                       </form>
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

