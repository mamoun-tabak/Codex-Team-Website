@extends('dashboard.layouts.layout')





@section('body')
<div class="card p-3" >


                    <form action="{{Route('dashboard.settings.update',$settings)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="alert alert-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="card-header">
                            <strong>Settings</strong>
                        </div>
                        <div class="card-block p-2">

                            <div class="d-flex p-2 m-1">
                                <div class="form-group col-md-6 m-1 p-2 bg-black">
                                    <label style="color:white;">logo</label><br>
                                    <img src="{{asset($settings->logo)}}" alt="" style="height: 50px;">
                                </div>  
                                <div class="form-group col-md-6 m-1 p-2 bg-black">
                                    <label style="color:white;">favicon</label><br>
                                    <img src="{{asset($settings->favicon)}}" alt="" style="height: 50px;">
                                </div>
                            </div>
                            
                            <div class="d-md-flex p-2 m-1">
                                <div class="form-group col-md-6 m-1">
                                    <label>logo</label>
                                    <input type="file" name="logo" class="form-control" placeholder="Enter Email.." >
                                </div>
                                <div class="form-group col-md-6 m-1">
                                    <label>favicon</label>
                                    <input type="file" name="favicon" class="form-control"
                                    placeholder="favicon" >
                                </div>
                            </div>

                            <div class="d-md-flex p-2 m-1">
                                <div class="form-group col-md-6 m-1">
                                    <label>facebook</label>
                                    <input  type="text" name="facebook" class="form-control"
                                    placeholder="enter link of facebook page" value="{{$settings->facebook}}">
                                </div>
                                <div class="form-group col-md-6 m-1">
                                    <label>instagram</label>
                                    <input  type="text" name="instagram" class="form-control"
                                    placeholder="enter link of instagram" value="{{$settings->instagram}}">
                                </div>
                            </div>

                            <div class="d-md-flex p-2 m-1">
                                <div class="form-group col-md-6 m-1">
                                    <label>Linked in</label>
                                    <input  type="text" name="linkedin" class="form-control"
                                    placeholder="enter link of linkedin acount" value="{{$settings->linkedin}}">
                                </div>
                                <div class="form-group col-md-6 m-1">
                                    <label>Twitter</label>
                                    <input  type="text" name="twitter" class="form-control"
                                    placeholder="enter link of twitter acount" value="{{$settings->twitter}}">
                                </div>
                            </div>

                            <div class="d-md-flex p-2 m-1">
                                <div class="form-group col-md-6 m-1">
                                    <label>phone</label>
                                    <input type="text" name="phone" class="form-control"
                                    placeholder="entern number of phone" value="{{$settings->phone}}">
                                </div>
                                <div class="form-group col-md-6 m-1">
                                    <label>email</label>
                                    <input type="text" name="email" class="form-control"
                                    placeholder="entern your email" value="{{$settings->email}}">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                    Submit</button>
                                <button type="reset" class="btn btn-sm" style="background:red;color:white;"><i class="fa fa-ban"></i>
                                    Reset</button>
                            </div>

                        </div>

                    </form>
</div>
@endsection